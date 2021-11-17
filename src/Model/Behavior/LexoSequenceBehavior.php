<?php
declare(strict_types=1);

namespace App\Model\Behavior;

use App\Rank\Rank;
use ArrayObject;
use Cake\Database\Expression\IdentifierExpression;
use Cake\Database\Expression\QueryExpression;
use Cake\Datasource\EntityInterface;
use Cake\Event\EventInterface;
use Cake\ORM\Behavior;
use Cake\ORM\Query;

/**
 * SequenceBehavior maintains a contiguous sequence of lexorank strings in a
 * selected column, such as `position`, for all records in a table,
 * or groups of records identified by one or more 'scope' fields, when adding, editing (including moving groups) or deleting
 * records.
 *
 * @copyright 2015-Present ADmad
 * @link https://github.com/ADmad/cakephp-sequence
 * @license MIT License - http://www.opensource.org/licenses/mit-license.php
 */
class LexoSequenceBehavior extends Behavior
{
    /**
     * Default settings.
     *
     * @var array<string, mixed>
     */
    protected $_defaultConfig = [
        'sequenceField' => 'position',
        'scope' => [],
        'startAt' => 'gggggggggg',
    ];

    /**
     * Old values for the entity being deleted
     *
     * @var array|null
     */
    protected $_oldValues;

    /**
     * Normalize config options.
     *
     * @param array<string, mixed> $config Configuration options include:
     * - sequenceField : The field name that stores the sequence number.
     *   Defaults is "position".
     * - scope : Array of field names that identify a single group of records
     *   that need to form a contiguous sequence.
     *   Default is empty array, i.e. no scope fields.
     * - startAt : You can start your sequence numbers at 0 or 1 or any other.
     *   Defaults is 1.
     * @return void
     */
    public function initialize(array $config): void
    {
        if (!$this->_config['scope']) {
            return;
        }

        if (is_string($this->_config['scope'])) {
            $this->_config['scope'] = [$this->_config['scope']];
        }
    }

    /**
     * Adds order value if not already set in query.
     *
     * @param \Cake\Event\EventInterface $event The beforeFind event that was fired.
     * @param \Cake\ORM\Query $query The query object.
     * @param \ArrayObject<string, mixed> $options The options passed to the find method.
     * @return void
     */
    public function beforeFind(EventInterface $event, Query $query, ArrayObject $options): void
    {
        if (!$query->clause('order')) {
            $query->order([$this->_table->aliasField($this->_config['sequenceField']) => 'ASC']);
        }
    }

    /**
     * Sets entity's order and updates order of other records when necessary.
     *
     * @param \Cake\Event\EventInterface $event The beforeSave event that was fired.
     * @param \Cake\Datasource\EntityInterface $entity The entity that is going to be saved.
     * @param \ArrayObject<string, mixed> $options The options passed to the save method.
     * @return void
     */
    public function beforeSave(EventInterface $event, EntityInterface $entity, ArrayObject $options): void
    {
        $config = $this->getConfig();

        $newScope = $this->_getScope($entity);
        if ($newScope === false) {
            return;
        }

        $orderField = $config['sequenceField'];
        $newOrder = $entity->get($orderField);

        // Adding
        if ($entity->isNew()) {
            // Order not specified
            if ($newOrder === null) {
                // Insert at end of list
                $entity->set($orderField, $this->_getHighestOrder($newScope) + 1);
                // Order specified
            } else {
                // Increment order of records it's inserted before
                $this->_sync(
                    [$orderField => $this->_getUpdateExpression('+')],
                    [$orderField . ' >=' => $newOrder],
                    $newScope
                );
            }

            // Editing
        } else {
            // No action if no new order or scope specified
            if ($newOrder === null && !$newScope) {
                return;
            }

            [$oldOrder, $oldScope] = $this->_getOldValues($entity);

            // No action if new and old scope and order same
            if (
                $newOrder == $oldOrder &&
                $newScope == $oldScope
            ) {
                return;
            }

            // If changing scope
            if ($newScope && $newScope != $oldScope) {
                // Decrement records in old scope with higher order than moved record old order
                $this->_sync(
                    [$orderField => $this->_getUpdateExpression('-')],
                    [$orderField . ' >' => $oldOrder],
                    $oldScope
                );

                // Order not specified
                if ($newOrder === null) {
                    // Insert at end of new scope
                    $entity->set(
                        $orderField,
                        $this->_getHighestOrder($newScope) + 1
                    );

                    // Order specified
                } else {
                    // Increment records in new scope with higher order than moved record new order
                    $this->_sync(
                        [$orderField => $this->_getUpdateExpression('+')],
                        [$orderField . ' >=' => $newOrder],
                        $newScope
                    );
                }
                // Same scope
            } else {
                // If moving up
                if ($newOrder < $oldOrder) {
                    // Increment order of those in between
                    $this->_sync(
                        [$orderField => $this->_getUpdateExpression('+')],
                        [
                            $orderField . ' >=' => $newOrder,
                            $orderField . ' <' => $oldOrder,
                        ],
                        $newScope
                    );

                // Moving down
                } else {
                    // Decrement order of those in between
                    $this->_sync(
                        [$orderField => $this->_getUpdateExpression('-')],
                        [
                            $orderField . ' >' => $oldOrder,
                            $orderField . ' <=' => $newOrder,
                        ],
                        $newScope
                    );
                }
            }
        }
    }

    /**
     * When you delete a record from a set, you need to decrement the order of all
     * records that were after it in the set.
     *
     * This hook just stores all required values from the entity. Actual order
     * updation is done in "afterDelete" hook.
     *
     * @param \Cake\Event\EventInterface $event The beforeDelete event that was fired.
     * @param \Cake\Datasource\EntityInterface $entity The entity that is going to be saved.
     * @return void
     */
    public function beforeDelete(EventInterface $event, EntityInterface $entity): void
    {
        $this->_oldValues = $this->_getOldValues($entity);
    }

    /**
     * When you delete a record from a set, you need to decrement the order of all
     * records that were after it in the set.
     *
     * @param \Cake\Event\EventInterface $event The beforeDelete event that was fired.
     * @param \Cake\Datasource\EntityInterface $entity The entity that is going to be saved.
     * @return void
     */
    public function afterDelete(EventInterface $event, EntityInterface $entity)
    {
        if (!$this->_oldValues) {
            return;
        }

        $orderField = $this->_config['sequenceField'];
        [$order, $scope] = $this->_oldValues;

        $this->_sync(
            [$orderField => $this->_getUpdateExpression('-')],
            [$orderField . ' >' => $order],
            $scope
        );

        $this->_oldValues = null;
    }

    /**
     * Decrease the position of the entity on the list
     *
     * If a "higher" entity exists, this will also swap positions with it
     *
     * @param \Cake\Datasource\EntityInterface $entity The entity that is going to be saved.
     * @return bool
     */
    public function moveUp(EntityInterface $entity)
    {
        return $this->_movePosition($entity, '-');
    }

    /**
     * Increase the position of the entity on the list
     *
     * If a "lower" entity exists, this will also swap positions with it
     *
     * @param \Cake\Datasource\EntityInterface $entity The entity that is going to be saved.
     * @return bool
     */
    public function moveDown(EntityInterface $entity)
    {
        return $this->_movePosition($entity, '+');
    }

    /**
     * Change the position of the entity on the list by a single position
     *
     * If an entity that conflicts with the new position already exists, this
     * will also swap positions with it
     *
     * @param \Cake\Datasource\EntityInterface $entity The entity that is going to be saved.
     * @param string $direction Whether to increment or decrement the field.
     * @return bool
     */
    protected function _movePosition(EntityInterface $entity, string $direction = '+'): bool
    {
        if ($entity->isNew()) {
            return false;
        }

        $scope = $this->_getScope($entity);
        if ($scope === false) {
            return false;
        }

        //TODO: adjust as per https://github.com/alexcrawford/lexorank-sortable/commit/85138e7f51068838d88e2c6be0357db39521df77

        $config = $this->getConfig();
        $table = $this->_table;

        $table->removeBehavior('LexoSequence');

        $return = $table->getConnection()->transactional(
            function ($connection) use ($table, $entity, $config, $scope, $direction) {
                $orderField = $config['sequenceField'];
                // Nothing to do if trying to move up entity already at first position
                if ($direction === '-' && $entity->get($orderField) === $config['startAt']) {
                    return true;
                }

                $oldOrder = $entity->get($orderField);
                $newOrder = $entity->get($orderField) - 1;
                if ($direction === '+') {
                    $newOrder = $entity->get($orderField) + 1;
                }

                /** @var \Cake\Datasource\EntityInterface|null $previousEntity */
                $previousEntity = $table->find()
                    ->where(array_merge($scope, [$orderField => $newOrder]))
                    ->first();

                if ($previousEntity !== null) {
                    $previousEntity->set($orderField, $oldOrder);
                    if (!$table->save($previousEntity, ['atomic' => false, 'checkRules' => false])) {
                        return false;
                    }
                // Nothing to do if trying to move down entity already at last position
                } elseif ($direction === '+') {
                    return true;
                }

                $entity->set($orderField, $newOrder);

                return $table->save($entity, ['atomic' => false, 'checkRules' => false]);
            }
        );

        $table->addBehavior('LexoSequence', $config);

        return (bool)$return;
    }

    /**
     * Set order for list of records provided.
     *
     * Records can be provided as array of entities or array of associative
     * arrays like `[['id' => 1], ['id' => 2]]` or array of primary key values
     * like `[1, 2]`.
     *
     * @param array $records Records.
     * @return bool
     */
    public function setOrder(array $records): bool
    {
        $config = $this->getConfig();
        $table = $this->_table;

        $table->removeBehavior('LexoSequence');

        $return = $table->getConnection()->transactional(
            function ($connection) use ($table, $records) {
                $order = $this->_config['startAt'];
                $field = $this->_config['sequenceField'];

                /** @var string $primaryKeyField */
                $primaryKeyField = $table->getPrimaryKey();
                foreach ($records as $record) {
                    if (is_scalar($record)) {
                        $record = [$primaryKeyField => $record];
                    }

                    if (is_array($record)) {
                        $record = $table->newEntity($record, [
                            'fields' => array_keys($record),
                            'validate' => false,
                            'accessibleFields' => [
                                $primaryKeyField => true,
                            ],
                        ]);
                        $record->setNew(false);
                        $record->setDirty($primaryKeyField, false);
                    }

                    $record->setAccess($field, true);
                    $record->set($field, $order++);

                    $r = $table->save(
                        $record,
                        ['atomic' => false, 'checkRules' => false]
                    );
                    if ($r === false) {
                        return false;
                    }
                }

                return true;
            }
        );

        $table->addBehavior('LexoSequence', $config);

        return $return;
    }

    /**
     * Get old order and scope values.
     *
     * @param \Cake\Datasource\EntityInterface $entity Entity.
     * @return array
     */
    protected function _getOldValues(EntityInterface $entity): array
    {
        $config = $this->getConfig();
        $fields = array_merge($config['scope'], [$config['sequenceField']]);

        $values = [];
        foreach ($fields as $field) {
            if ($entity->isDirty($field)) {
                $values[$field] = $entity->getOriginal($field);
            } elseif ($entity->has($field)) {
                $values[$field] = $entity->get($field);
            }
        }

        if (count($fields) !== count($values)) {
            /** @var string $primaryKeyField */
            $primaryKeyField = $this->_table->getPrimaryKey();
            $primaryKey = $entity->get($primaryKeyField);
            $entity = $this->_table->get($primaryKey, ['fields' => $fields]);
            $values = $entity->extract($fields);
        }

        $order = $values[$config['sequenceField']];
        unset($values[$config['sequenceField']]);

        foreach ($values as $field => $value) {
            if (is_null($value)) {
                $values[$field . ' IS'] = $value;
                unset($values[$field]);
            }
        }

        return [$order, $values];
    }

    /**
     * Get scope values.
     *
     * @param \Cake\Datasource\EntityInterface $entity Entity.
     * @return array|false
     */
    protected function _getScope(EntityInterface $entity)
    {
        $scope = [];
        $config = $this->getConfig();

        // If scope are specified and data for all scope fields is not
        // provided we cannot calculate new order
        if ($config['scope']) {
            $scope = $entity->extract($config['scope']);
            if (count($scope) !== count($config['scope'])) {
                return false;
            }

            // Modify where clauses when NULL values are used
            foreach ($scope as $field => $value) {
                if (is_null($value)) {
                    $scope[$field . ' IS'] = $value;
                    unset($scope[$field]);
                }
            }
        }

        return $scope;
    }

    /**
     * Returns the current highest order of all records in the set. When a new
     * record is added to the set, it is added at the current highest order, plus
     * one.
     *
     * @param array $scope Array with scope field => scope values, used for conditions.
     * @return int Value of order field of last record in set
     */
    protected function _getHighestOrder(array $scope = []): int
    {
        $orderField = $this->_config['sequenceField'];

        // Find the last record in the set
        $last = $this->_table->find()
            ->select([$orderField])
            ->where($scope)
            ->order([$orderField => 'DESC'])
            ->limit(1)
            ->enableHydration(false)
            ->first();

        // If there is a last record (i.e. any) in the set, return the it's order
        if ($last) {
            return $last[$orderField];
        }

        // If there isn't any records in the set, return the start number minus 1
        return (int)$this->_config['startAt'] - 1;
    }

    /**
     * Auxiliary function used to alter the value of order fields by a certain
     * amount that match the passed conditions.
     *
     * @param array $fields Fields to update.
     * @param array $conditions Conditions for matching rows.
     * @param array $scope Grouping scope that will be added to coditions.
     * @return int Count of rows updated.
     */
    protected function _sync(array $fields, array $conditions, ?array $scope = null): int
    {
        if ($scope) {
            $conditions = array_merge($conditions, $scope);
        }

        return $this->_table->updateAll($fields, $conditions);
    }

    /**
     * Returns the update expression for the order field.
     *
     * @param string $direction Whether to increment or decrement the field.
     * @return \Cake\Database\Expression\QueryExpression QueryExpression to modify the order field
     */
    protected function _getUpdateExpression(string $direction = '+'): QueryExpression
    {
        $field = $this->_config['sequenceField'];

        return $this->_table->query()->newExpr()
            ->add(new IdentifierExpression($field))
            ->add('1')
            ->setConjunction($direction);
    }

    /**
     * @param string $prev
     * @param string $next
     * @return string
     */
    protected static function getNewPosition(string $prev, string $next = ''): string
    {
        return (new Rank($prev, $next))->get();
    }
}

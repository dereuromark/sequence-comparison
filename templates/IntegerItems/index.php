<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\IntegerItem[]|\Cake\Collection\CollectionInterface $integerItems
 */
?>
<div class="integerItems index content">
    <?= $this->Html->link(__('New Integer Item'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Integer Items') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('position') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($integerItems as $integerItem): ?>
                <tr>
                    <td><?= $this->Number->format($integerItem->id) ?></td>
                    <td><?= h($integerItem->name) ?></td>
                    <td><?= $this->Number->format($integerItem->position) ?></td>
                    <td><?= h($integerItem->created) ?></td>
                    <td><?= h($integerItem->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $integerItem->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $integerItem->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $integerItem->id], ['confirm' => __('Are you sure you want to delete # {0}?', $integerItem->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>

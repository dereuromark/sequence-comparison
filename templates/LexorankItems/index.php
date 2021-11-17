<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\LexorankItem[]|\Cake\Collection\CollectionInterface $lexorankItems
 */
?>
<div class="lexorankItems index content">
    <?= $this->Html->link(__('New Lexorank Item'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Lexorank Items') ?></h3>
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
                <?php foreach ($lexorankItems as $lexorankItem): ?>
                <tr>
                    <td><?= $this->Number->format($lexorankItem->id) ?></td>
                    <td><?= h($lexorankItem->name) ?></td>
                    <td><?= h($lexorankItem->position) ?></td>
                    <td><?= h($lexorankItem->created) ?></td>
                    <td><?= h($lexorankItem->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $lexorankItem->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $lexorankItem->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $lexorankItem->id], ['confirm' => __('Are you sure you want to delete # {0}?', $lexorankItem->id)]) ?>
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

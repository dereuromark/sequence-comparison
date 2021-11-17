<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\LexorankItem $lexorankItem
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Lexorank Item'), ['action' => 'edit', $lexorankItem->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Lexorank Item'), ['action' => 'delete', $lexorankItem->id], ['confirm' => __('Are you sure you want to delete # {0}?', $lexorankItem->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Lexorank Items'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Lexorank Item'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="lexorankItems view content">
            <h3><?= h($lexorankItem->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($lexorankItem->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Position') ?></th>
                    <td><?= h($lexorankItem->position) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($lexorankItem->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($lexorankItem->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($lexorankItem->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>

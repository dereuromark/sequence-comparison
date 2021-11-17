<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\IntegerItem $integerItem
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Integer Item'), ['action' => 'edit', $integerItem->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Integer Item'), ['action' => 'delete', $integerItem->id], ['confirm' => __('Are you sure you want to delete # {0}?', $integerItem->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Integer Items'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Integer Item'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="integerItems view content">
            <h3><?= h($integerItem->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($integerItem->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($integerItem->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Position') ?></th>
                    <td><?= $this->Number->format($integerItem->position) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($integerItem->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($integerItem->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>

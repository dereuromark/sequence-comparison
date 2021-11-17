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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $integerItem->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $integerItem->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Integer Items'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="integerItems form content">
            <?= $this->Form->create($integerItem) ?>
            <fieldset>
                <legend><?= __('Edit Integer Item') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('position');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>

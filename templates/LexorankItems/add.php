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
            <?= $this->Html->link(__('List Lexorank Items'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="lexorankItems form content">
            <?= $this->Form->create($lexorankItem) ?>
            <fieldset>
                <legend><?= __('Add Lexorank Item') ?></legend>
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

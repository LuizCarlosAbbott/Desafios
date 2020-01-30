<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Chamado $chamado
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $chamado->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $chamado->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Chamados'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="chamados form content">
            <?= $this->Form->create($chamado) ?>
            <fieldset>
                <legend><?= __('Edit Chamado') ?></legend>
                <?php
                echo $this->Form->control('titulo');
                echo $this->Form->control('descrição');
                echo $this->Form->control('feito');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
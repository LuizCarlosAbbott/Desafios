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
            <?= $this->Html->link(__('Edit Chamado'), ['action' => 'edit', $chamado->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Chamado'), ['action' => 'delete', $chamado->id], ['confirm' => __('Are you sure you want to delete # {0}?', $chamado->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Chamados'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Chamado'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="chamados view content">
            <h3><?= h($chamado->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($chamado->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Feito') ?></th>
                    <td><?= $chamado->feito ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Titulo') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($chamado->titulo)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Descrição') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($chamado->descrição)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>

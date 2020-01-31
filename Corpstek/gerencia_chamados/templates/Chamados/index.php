<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Chamado[]|\Cake\Collection\CollectionInterface $chamados
 */
?>
<div class="chamados index content">
    <?= $this->Html->link(__('New Chamado'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Chamados') ?></h3>
    <div class="table-responsive">

        <style>
            .table {
                width: 99%;
            }

            .table td {
                font-family: Merriweather, serif;
                font-size: 18px;
                padding: 10px 5px;
                overflow: hidden;
                word-break: normal;
                width: 100%;
            }

            .column_left {
                float: left;
                display: inline-table;
                height: 10%;
                text-align: left;
                margin: 0;
                padding: 0;
                width: 50%;

            }

            .column_right {
                float: left;
                display: inline-table;
                height: 10%;
                text-align: left;
                margin: 0;
                padding: 0;
                width: 50%;

            }

            .actions a {
                font-weight: normal;
            }

            td,
            th {
                font-family: "Calibri ";
            }

            th {
                color: white;
            }

            h3 {
                margin: 0;
            }
        </style>



        <table class="table">
            <tbody class=column_left>
                <tr>
                    <td>
                        <h3>A Fazer</h3>
                    </td>
                </tr>
                <?php foreach ($chamados as $chamado) : ?>
                    <?php if ($chamado->feito == null) :  ?>
                        <tr>
                            <td class="actions column_left"><?= $this->Number->format($chamado->id) ?>)
                                <?= $this->Html->link(
                                    h($chamado->titulo),
                                    ['action' => 'edit', $chamado->id]
                                ) ?>
                            </td>
                        </tr>
                <?php endif;
                endforeach; ?>
            </tbody>
            <tbody class=column_right>
                <tr>
                    <td>
                        <h3>Feitos</h3>
                    </td>
                </tr>
                <?php foreach ($chamados as $chamado) : ?>
                    <?php if ($chamado->feito) :  ?>
                        <tr>
                            <td class="actions column_right"><?= $this->Number->format($chamado->id) ?>)
                                <?= $this->Html->link(
                                    h($chamado->titulo),
                                    ['action' => 'edit', $chamado->id]
                                ) ?>
                            </td>
                        </tr>
                <?php endif;
                endforeach; ?>
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
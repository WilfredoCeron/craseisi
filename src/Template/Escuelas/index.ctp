<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Escuela'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="escuelas index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            
            <th><?= $this->Paginator->sort('nombre Escuela') ?></th>
            <th><?= $this->Paginator->sort('codigo Escuela') ?></th>
            <th class="actions"><?= __('Acciones') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($escuelas as $escuela): ?>
        <tr>
            
            <td><?= h($escuela->nombreEscuela) ?></td>
            <td><?= h($escuela->codigoEscuela) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('Ver'), ['action' => 'view', $escuela->id]) ?>
                <?= $this->Html->link(__('Editar'), ['action' => 'edit', $escuela->id]) ?>
                <?= $this->Form->postLink(__('Eliminar'), ['action' => 'delete', $escuela->id], ['confirm' => __('Are you sure you want to delete # {0}?', $escuela->id)]) ?>
            </td>
        </tr>

    <?php endforeach; ?>
    </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>

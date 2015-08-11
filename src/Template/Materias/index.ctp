<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Materia'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="materias index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('codigo') ?></th>
            <th><?= $this->Paginator->sort('nombre') ?></th>
            <th><?= $this->Paginator->sort('id_escuela') ?></th>
            <th><?= $this->Paginator->sort('urlCompleta') ?></th>
            <th><?= $this->Paginator->sort('urlAcotada') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($materias as $materia): ?>
        <tr>
            <td><?= $this->Number->format($materia->id) ?></td>
            <td><?= h($materia->codigo) ?></td>
            <td><?= h($materia->nombre) ?></td>
            <td><?= $this->Number->format($materia->id_escuela) ?></td>
            <td><?= h($materia->urlCompleta) ?></td>
            <td><?= h($materia->urlAcotada) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $materia->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $materia->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $materia->id], ['confirm' => __('Are you sure you want to delete # {0}?', $materia->id)]) ?>
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

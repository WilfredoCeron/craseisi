<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Materia'), ['action' => 'edit', $materia->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Materia'), ['action' => 'delete', $materia->id], ['confirm' => __('Are you sure you want to delete # {0}?', $materia->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Materias'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Materia'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="materias view large-10 medium-9 columns">
    <h2><?= h($materia->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Codigo') ?></h6>
            <p><?= h($materia->codigo) ?></p>
            <h6 class="subheader"><?= __('Nombre') ?></h6>
            <p><?= h($materia->nombre) ?></p>
            <h6 class="subheader"><?= __('UrlCompleta') ?></h6>
            <p><?= h($materia->urlCompleta) ?></p>
            <h6 class="subheader"><?= __('UrlAcotada') ?></h6>
            <p><?= h($materia->urlAcotada) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($materia->id) ?></p>
            <h6 class="subheader"><?= __('Id Escuela') ?></h6>
            <p><?= $this->Number->format($materia->id_escuela) ?></p>
        </div>
    </div>
    <div class="row texts">
        <div class="columns large-9">
            <h6 class="subheader"><?= __('Descripcion') ?></h6>
            <?= $this->Text->autoParagraph(h($materia->descripcion)) ?>
        </div>
    </div>
</div>

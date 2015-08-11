<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Curso'), ['action' => 'edit', $curso->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Curso'), ['action' => 'delete', $curso->id], ['confirm' => __('Are you sure you want to delete # {0}?', $curso->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Cursos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Curso'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="cursos view large-10 medium-9 columns">
    <h2><?= h($curso->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Codigo') ?></h6>
            <p><?= h($curso->codigo) ?></p>
            <h6 class="subheader"><?= __('Nombre') ?></h6>
            <p><?= h($curso->nombre) ?></p>
            <h6 class="subheader"><?= __('UrlAcotada') ?></h6>
            <p><?= h($curso->urlAcotada) ?></p>
            <h6 class="subheader"><?= __('NombreEscuela') ?></h6>
            <p><?= h($curso->nombreEscuela) ?></p>
            <h6 class="subheader"><?= __('CodigoEscuela') ?></h6>
            <p><?= h($curso->codigoEscuela) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($curso->id) ?></p>
        </div>
    </div>
    <div class="row texts">
        <div class="columns large-9">
            <h6 class="subheader"><?= __('Descripcion') ?></h6>
            <?= $this->Text->autoParagraph(h($curso->descripcion)) ?>
        </div>
    </div>
</div>

<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Escuela'), ['action' => 'edit', $escuela->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Escuela'), ['action' => 'delete', $escuela->id], ['confirm' => __('Are you sure you want to delete # {0}?', $escuela->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Escuelas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Escuela'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="escuelas view large-10 medium-9 columns">
    <h2><?= h($escuela->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('NombreEscuela') ?></h6>
            <p><?= h($escuela->nombreEscuela) ?></p>
            <h6 class="subheader"><?= __('CodigoEscuela') ?></h6>
            <p><?= h($escuela->codigoEscuela) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($escuela->id) ?></p>
        </div>
    </div>
</div>

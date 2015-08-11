<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Escuelas'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="escuelas form large-10 medium-9 columns">
    <?= $this->Form->create($escuela) ?>
    <fieldset>
        <legend><?= __('Add Escuela') ?></legend>
        <?php
            echo $this->Form->input('nombreEscuela');
            echo $this->Form->input('codigoEscuela');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

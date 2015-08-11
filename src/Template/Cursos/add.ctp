<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Cursos'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="cursos form large-10 medium-9 columns">
    <?= $this->Form->create($curso) ?>
    <fieldset>
        <legend><?= __('Add Curso') ?></legend>
        <?php
            echo $this->Form->input('codigo');
            echo $this->Form->input('nombre');
            echo $this->Form->input('urlAcotada');
            echo $this->Form->input('descripcion');
            echo $this->Form->input('nombreEscuela');
            echo $this->Form->input('codigoEscuela');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

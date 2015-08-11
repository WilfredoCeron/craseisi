<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $materia->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $materia->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Materias'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="materias form large-10 medium-9 columns">
    <?= $this->Form->create($materia) ?>
    <fieldset>
        <legend><?= __('Edit Materia') ?></legend>
        <?php
            echo $this->Form->input('codigo');
            echo $this->Form->input('nombre');
            echo $this->Form->input('id_escuela');
            echo $this->Form->input('urlCompleta');
            echo $this->Form->input('urlAcotada');
            echo $this->Form->input('descripcion');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

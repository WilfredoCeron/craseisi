<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $escuela->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $escuela->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Escuelas'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="escuelas form large-10 medium-9 columns">
    <?= $this->Form->create($escuela) ?>
    <fieldset>
        <legend><?= __('Edit Escuela') ?></legend>
        <?php
            echo $this->Form->input('nombreEscuela');
            echo $this->Form->input('codigoEscuela');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

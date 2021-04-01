<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Empleado $empleado
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $empleado->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $empleado->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Empleados'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="empleados form content">
            <?= $this->Form->create($empleado) ?>
            <fieldset>
                <legend><?= __('Edit Empleado') ?></legend>
                <?php
                    echo $this->Form->control('nombre');
                    echo $this->Form->control('apellido_paterno');
                    echo $this->Form->control('apellido_materno');
                    echo $this->Form->control('rfc');
                    echo $this->Form->control('direccion');
                    echo $this->Form->control('telefono');
                    echo $this->Form->control('departamento_id', ['options' => $departamento]);
                    echo $this->Form->control('fecha_firma', ['empty' => true]);
                    echo $this->Form->control('fecha_inicio_laboral', ['empty' => true]);
                    echo $this->Form->control('fecha_alta_imss', ['empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>

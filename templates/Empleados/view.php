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
            <?= $this->Html->link(__('Edit Empleado'), ['action' => 'edit', $empleado->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Empleado'), ['action' => 'delete', $empleado->id], ['confirm' => __('Are you sure you want to delete # {0}?', $empleado->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Empleados'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Empleado'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="empleados view content">
            <h3><?= h($empleado->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nombre') ?></th>
                    <td><?= h($empleado->nombre) ?></td>
                </tr>
                <tr>
                    <th><?= __('Apellido Paterno') ?></th>
                    <td><?= h($empleado->apellido_paterno) ?></td>
                </tr>
                <tr>
                    <th><?= __('Apellido Materno') ?></th>
                    <td><?= h($empleado->apellido_materno) ?></td>
                </tr>
                <tr>
                    <th><?= __('Rfc') ?></th>
                    <td><?= h($empleado->rfc) ?></td>
                </tr>
                <tr>
                    <th><?= __('Telefono') ?></th>
                    <td><?= h($empleado->telefono) ?></td>
                </tr>
                <tr>
                    <th><?= __('Departamento') ?></th>
                    <td><?= $empleado->has('departamento') ? $this->Html->link($empleado->departamento->id, ['controller' => 'Departamento', 'action' => 'view', $empleado->departamento->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($empleado->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fecha Firma') ?></th>
                    <td><?= h($empleado->fecha_firma) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fecha Inicio Laboral') ?></th>
                    <td><?= h($empleado->fecha_inicio_laboral) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fecha Alta Imss') ?></th>
                    <td><?= h($empleado->fecha_alta_imss) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Direccion') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($empleado->direccion)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>

<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Departamento $departamento
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Departamento'), ['action' => 'edit', $departamento->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Departamento'), ['action' => 'delete', $departamento->id], ['confirm' => __('Are you sure you want to delete # {0}?', $departamento->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Departamento'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Departamento'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="departamento view content">
            <h3><?= h($departamento->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Departamento') ?></th>
                    <td><?= h($departamento->departamento) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($departamento->id) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Empleados') ?></h4>
                <?php if (!empty($departamento->empleados)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Nombre') ?></th>
                            <th><?= __('Apellido Paterno') ?></th>
                            <th><?= __('Apellido Materno') ?></th>
                            <th><?= __('Rfc') ?></th>
                            <th><?= __('Direccion') ?></th>
                            <th><?= __('Telefono') ?></th>
                            <th><?= __('Departamento Id') ?></th>
                            <th><?= __('Fecha Firma') ?></th>
                            <th><?= __('Fecha Inicio Laboral') ?></th>
                            <th><?= __('Fecha Alta Imss') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($departamento->empleados as $empleados) : ?>
                        <tr>
                            <td><?= h($empleados->id) ?></td>
                            <td><?= h($empleados->nombre) ?></td>
                            <td><?= h($empleados->apellido_paterno) ?></td>
                            <td><?= h($empleados->apellido_materno) ?></td>
                            <td><?= h($empleados->rfc) ?></td>
                            <td><?= h($empleados->direccion) ?></td>
                            <td><?= h($empleados->telefono) ?></td>
                            <td><?= h($empleados->departamento_id) ?></td>
                            <td><?= h($empleados->fecha_firma) ?></td>
                            <td><?= h($empleados->fecha_inicio_laboral) ?></td>
                            <td><?= h($empleados->fecha_alta_imss) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Empleados', 'action' => 'view', $empleados->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Empleados', 'action' => 'edit', $empleados->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Empleados', 'action' => 'delete', $empleados->id], ['confirm' => __('Are you sure you want to delete # {0}?', $empleados->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

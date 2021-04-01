<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Empleado[]|\Cake\Collection\CollectionInterface $empleados
 */
?>
<div class="empleados index content">
    <?= $this->Html->link(__('New Empleado'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Empleados') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('nombre') ?></th>
                    <th><?= $this->Paginator->sort('apellido_paterno') ?></th>
                    <th><?= $this->Paginator->sort('apellido_materno') ?></th>
                    <th><?= $this->Paginator->sort('rfc') ?></th>
                    <th><?= $this->Paginator->sort('telefono') ?></th>
                    <th><?= $this->Paginator->sort('departamento_id') ?></th>
                    <th><?= $this->Paginator->sort('fecha_firma') ?></th>
                    <th><?= $this->Paginator->sort('fecha_inicio_laboral') ?></th>
                    <th><?= $this->Paginator->sort('fecha_alta_imss') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($empleados as $empleado): ?>
                <tr>
                    <td><?= $this->Number->format($empleado->id) ?></td>
                    <td><?= h($empleado->nombre) ?></td>
                    <td><?= h($empleado->apellido_paterno) ?></td>
                    <td><?= h($empleado->apellido_materno) ?></td>
                    <td><?= h($empleado->rfc) ?></td>
                    <td><?= h($empleado->telefono) ?></td>
                    <td><?= $empleado->has('departamento') ? $this->Html->link($empleado->departamento->id, ['controller' => 'Departamento', 'action' => 'view', $empleado->departamento->id]) : '' ?></td>
                    <td><?= h($empleado->fecha_firma) ?></td>
                    <td><?= h($empleado->fecha_inicio_laboral) ?></td>
                    <td><?= h($empleado->fecha_alta_imss) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $empleado->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $empleado->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $empleado->id], ['confirm' => __('Are you sure you want to delete # {0}?', $empleado->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>

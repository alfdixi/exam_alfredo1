<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Departamento Entity
 *
 * @property int $id
 * @property string|null $departamento
 *
 * @property \App\Model\Entity\Empleado[] $empleados
 */
class Departamento extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'departamento' => true,
        'empleados' => true,
    ];
}

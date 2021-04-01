<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Empleado Entity
 *
 * @property int $id
 * @property string|null $nombre
 * @property string|null $apellido_paterno
 * @property string|null $apellido_materno
 * @property string|null $rfc
 * @property string|null $direccion
 * @property string|null $telefono
 * @property int $departamento_id
 * @property \Cake\I18n\FrozenDate|null $fecha_firma
 * @property \Cake\I18n\FrozenDate|null $fecha_inicio_laboral
 * @property \Cake\I18n\FrozenDate|null $fecha_alta_imss
 *
 * @property \App\Model\Entity\Departamento $departamento
 */
class Empleado extends Entity
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
        'nombre' => true,
        'apellido_paterno' => true,
        'apellido_materno' => true,
        'rfc' => true,
        'direccion' => true,
        'telefono' => true,
        'departamento_id' => true,
        'fecha_firma' => true,
        'fecha_inicio_laboral' => true,
        'fecha_alta_imss' => true,
        'departamento' => true,
    ];
}

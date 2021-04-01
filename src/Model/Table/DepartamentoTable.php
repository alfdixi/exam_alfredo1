<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Departamento Model
 *
 * @property \App\Model\Table\EmpleadosTable&\Cake\ORM\Association\HasMany $Empleados
 *
 * @method \App\Model\Entity\Departamento newEmptyEntity()
 * @method \App\Model\Entity\Departamento newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Departamento[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Departamento get($primaryKey, $options = [])
 * @method \App\Model\Entity\Departamento findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Departamento patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Departamento[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Departamento|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Departamento saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Departamento[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Departamento[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Departamento[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Departamento[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class DepartamentoTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('departamento');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->hasMany('Empleados', [
            'foreignKey' => 'departamento_id',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('departamento')
            ->maxLength('departamento', 255)
            ->allowEmptyString('departamento');

        return $validator;
    }
}

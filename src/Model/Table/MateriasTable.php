<?php
namespace App\Model\Table;

use App\Model\Entity\Materia;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Materias Model
 *
 */
class MateriasTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('materias');
        $this->displayField('id');
        $this->primaryKey('id');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->add('id', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('id', 'create');
            
        $validator
            ->requirePresence('codigo', 'create')
            ->notEmpty('codigo')
            ->add('codigo', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);
            
        $validator
            ->requirePresence('nombre', 'create')
            ->notEmpty('nombre');
            
        $validator
            ->add('id_escuela', 'valid', ['rule' => 'numeric'])
            ->requirePresence('id_escuela', 'create')
            ->notEmpty('id_escuela');
            
        $validator
            ->allowEmpty('urlCompleta');
            
        $validator
            ->allowEmpty('urlAcotada');
            
        $validator
            ->allowEmpty('descripcion');

        return $validator;
    }
}

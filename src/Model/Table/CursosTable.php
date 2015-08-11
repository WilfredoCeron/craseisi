<?php
namespace App\Model\Table;

use App\Model\Entity\Curso;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Cursos Model
 *
 */
class CursosTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('cursos');
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
            ->notEmpty('codigo');
            
        $validator
            ->requirePresence('nombre', 'create')
            ->notEmpty('nombre');
            
        $validator
            ->allowEmpty('urlAcotada');
            
        $validator
            ->allowEmpty('descripcion');
            
        $validator
            ->requirePresence('nombreEscuela', 'create')
            ->notEmpty('nombreEscuela');
            
        $validator
            ->allowEmpty('codigoEscuela');

        return $validator;
    }
}

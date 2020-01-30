<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Chamados Model
 *
 * @method \App\Model\Entity\Chamado get($primaryKey, $options = [])
 * @method \App\Model\Entity\Chamado newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Chamado[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Chamado|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Chamado saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Chamado patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Chamado[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Chamado findOrCreate($search, callable $callback = null, $options = [])
 */
class ChamadosTable extends Table
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

        $this->setTable('chamados');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
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
            ->scalar('titulo')
            ->requirePresence('titulo', 'create')
            ->notEmptyString('titulo');

        $validator
            ->scalar('descrição')
            ->requirePresence('descrição', 'create')
            ->notEmptyString('descrição');

        $validator
            ->boolean('feito')
            ->notEmptyString('feito');

        return $validator;
    }
}

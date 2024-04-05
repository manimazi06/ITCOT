<?php

declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Users Model
 *
 * @property \App\Model\Table\RolesTable&\Cake\ORM\Association\BelongsTo $Roles
 * @property \App\Model\Table\CustomersTable&\Cake\ORM\Association\HasMany $Customers
 * @property \App\Model\Table\UserLogsTable&\Cake\ORM\Association\HasMany $UserLogs
 *
 * @method \App\Model\Entity\User newEmptyEntity()
 * @method \App\Model\Entity\User newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\User[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\User get($primaryKey, $options = [])
 * @method \App\Model\Entity\User findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\User patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\User[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\User|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\User saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class UsersTable extends Table
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

        $this->setTable('users');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Roles', [
            'foreignKey' => 'role_id',
            'joinType' => 'LEFT',
        ]);
        // $this->belongsTo('Circles', [
            // 'foreignKey' => 'circle_id',
            // 'joinType' => 'INNER',
        // ]);
        // $this->belongsTo('Divisions', [
            // 'foreignKey' => 'division_id',
            // 'joinType' => 'INNER',
        // ]);
        // $this->belongsTo('Ranges', [
            // 'foreignKey' => 'range_id',
            // 'joinType' => 'INNER',
        // ]);
        // $this->hasMany('Customers', [
            // 'foreignKey' => 'user_id',
        // ]);
        // $this->hasMany('UserLogs', [
            // 'foreignKey' => 'user_id',
        // ]);
        // $this->hasMany('Districts', [
            // 'foreignKey' => 'district_id',
        // ]);
        // $this->hasMany('Blocks', [
            // 'foreignKey' => 'block_id',
        // ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    // public function validationDefault(Validator $validator): Validator
    // {
        // $validator
            // ->scalar('username')
            // ->maxLength('username', 100)
            // ->requirePresence('username', 'create')
            // ->notEmptyString('username');

        // $validator
            // ->scalar('password')
            // ->maxLength('password', 100)
            // ->requirePresence('password', 'create')
            // ->notEmptyString('password');

        // $validator
            // ->integer('role_id')
            // ->notEmptyString('role_id');

        // $validator
            // ->integer('is_active')
            // ->notEmptyString('is_active');

        // $validator
            // ->dateTime('created_date')
            // ->allowEmptyDateTime('created_date');

        // $validator
            // ->integer('created_by')
            // ->allowEmptyString('created_by');

        // $validator
            // ->dateTime('updated_date')
            // ->notEmptyDateTime('updated_date');

        // $validator
            // ->integer('updated_by')
            // ->allowEmptyString('updated_by');

        // return $validator;
    // }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    /*public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->isUnique(['username']), ['errorField' => 'username']);
        $rules->add($rules->existsIn('role_id', 'Roles'), ['errorField' => 'role_id']);

        return $rules;
    }*/
}
<?php
declare(strict_types=1);
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class StatesTable extends Table
{
    
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('states');
        $this->setDisplayField('state_name');
        $this->setPrimaryKey('id');

        // $this->belongsTo('Roles', [
            // 'foreignKey' => 'role_id',
            // 'joinType' => 'LEFT',
        // ]);
       
    }   
}
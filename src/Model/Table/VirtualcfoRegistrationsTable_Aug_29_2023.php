<?php
declare(strict_types=1);
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class VirtualcfoRegistrationsTable extends Table
{
    
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('virtualcfo_registrations');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->belongsTo('VirtualcfoStates', [
            'foreignKey' => 'virualcfo_state_id',
            'joinType' => 'LEFT',
        ]);
       
    }   
}
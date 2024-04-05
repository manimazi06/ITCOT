<?php
declare(strict_types=1);
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class VirtualServicesTable extends Table
{
    
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('virtual_services');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

       $this->belongsTo('VirtualcfoRegistrations', [
            'foreignKey' => 'virtualcfo_registration_id',
            'joinType' => 'LEFT',
        ]);
       $this->belongsTo('Services', [
            'foreignKey' => 'service_id',
            'joinType' => 'LEFT',
        ]);


      
       
    }   
}
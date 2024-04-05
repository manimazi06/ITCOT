<?php
declare(strict_types=1);
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class ComplianceServicesTable extends Table
{
    
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('compliance_services');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

       $this->belongsTo('States', [
            'foreignKey' => 'state_id',
            'joinType' => 'LEFT',
        ]);

       $this->belongsTo('Districts', [
            'foreignKey' => 'district_id',
            'joinType' => 'LEFT',
        ]);

       $this->belongsTo('ServiceCompliances', [
            'foreignKey' => 'service_compliance_id',
            'joinType' => 'LEFT',
        ]);
      
       
    }   
}
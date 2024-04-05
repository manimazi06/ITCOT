<?php
declare(strict_types=1);
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class DistrictwisePincodedetailsTable extends Table
{
    
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('districtwise_pincodedetails');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

         $this->belongsTo('Districts', [
             'foreignKey' => 'district_id',
             'joinType' => 'LEFT',
         ]);
       
    }   
}
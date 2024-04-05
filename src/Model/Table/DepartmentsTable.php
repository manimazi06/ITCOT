<?php
declare(strict_types=1);
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class DepartmentsTable extends Table
{
    
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('departments');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

         $this->belongsTo('SchemeTypes', [
             'foreignKey' => 'scheme_type_id',
             'joinType' => 'LEFT',
         ]);
       
    }   
}
<?php
declare(strict_types=1);
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class DepartmentSchemesTable extends Table
{
    
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('department_schemes');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

         $this->belongsTo('Departments', [
             'foreignKey' => 'department_id',
             'joinType' => 'LEFT',
         ]);
       
    }   
}
<?php
declare(strict_types=1);
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class DigitalLibraryLogsTable extends Table
{
    
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('digital_library_logs');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'LEFT',
        ]);
        $this->belongsTo('SchemeTypes', [
            'foreignKey' => 'scheme_type_id',
            'joinType' => 'LEFT',
        ]);
        $this->belongsTo('Departments', [
            'foreignKey' => 'department_id',
            'joinType' => 'LEFT',
        ]);
        $this->belongsTo('DepartmentSchemes', [
            'foreignKey' => 'department_scheme_id',
            'joinType' => 'LEFT',
        ]);
       
    }   
}
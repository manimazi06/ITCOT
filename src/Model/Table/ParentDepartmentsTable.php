<?php
declare(strict_types=1);
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class ParentDepartmentsTable extends Table
{
    
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('parent_departments');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        // $this->belongsTo('Educations', [
             // 'foreignKey' => 'education_id',
         // ]);
       
    }   
}
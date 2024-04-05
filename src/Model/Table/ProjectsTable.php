<?php
declare(strict_types=1);
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class ProjectsTable extends Table
{
    
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('projects');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

       $this->belongsTo('Categories', [
            'foreignKey' => 'category_id',
            'joinType' => 'LEFT',
        ]);
        $this->belongsTo('Educations', [
            'foreignKey' => 'education_id',
            'joinType' => 'LEFT',
        ]);
        $this->belongsTo('Sectortypes', [
            'foreignKey' => 'sectortype_id',
            'joinType' => 'LEFT',
        ]);
        $this->belongsTo('Localitytype', [
            'foreignKey' => 'localitytype_id',
            'joinType' => 'LEFT',
        ]);
        $this->belongsTo('Registrationtype', [
            'foreignKey' => 'registrationtype_id',
            'joinType' => 'LEFT',
        ]);
        $this->belongsTo('States', [
            'foreignKey' => 'state_id',
            'joinType' => 'LEFT',
        ]);
        $this->belongsTo('LoanTypes', [
            'foreignKey' => 'loan_type_id',
            'joinType' => 'LEFT',
        ]);
        $this->belongsTo('LoanPurposes', [
            'foreignKey' => 'loan_purpose_id',
            'joinType' => 'LEFT',
        ]);
       
    }   
}
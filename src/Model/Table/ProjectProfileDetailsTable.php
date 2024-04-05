<?php
declare(strict_types=1);
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class ProjectProfileDetailsTable extends Table
{
    
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('project_profile_details');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

         $this->belongsTo('ProjectProfiles', [
             'foreignKey' => 'project_profile_id',
             'joinType' => 'LEFT',
         ]);
		 
		  $this->belongsTo('ProjectProfileValues', [
             'foreignKey' => 'project_profile_value_id',
             'joinType' => 'LEFT',
         ]);
       
    }   
}
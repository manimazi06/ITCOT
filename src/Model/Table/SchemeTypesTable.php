<?php
declare(strict_types=1);
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class SchemeTypesTable extends Table
{
    
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('scheme_types');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

         $this->belongsTo('Schemes', [
             'foreignKey' => 'scheme_id',
             'joinType' => 'LEFT',
         ]);
       
    }   
}
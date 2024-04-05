<?php
declare(strict_types=1);
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class MsmeSchemesTable extends Table
{
    
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('msme_schemes');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

         $this->belongsTo('MsmeDivisions', [
             'foreignKey' => 'msme_division_id',
            'joinType' => 'LEFT',
         ]);
       
    }   
}
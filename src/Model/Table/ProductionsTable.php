<?php
declare(strict_types=1);
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class ProductionsTable extends Table
{
    
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('productions');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

         $this->belongsTo('Units', [
             'foreignKey' => 'unit_id',
             'joinType' => 'LEFT',
         ]);
       
    }   
}
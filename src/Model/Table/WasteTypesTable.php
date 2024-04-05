<?php
declare(strict_types=1);
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class WasteTypesTable extends Table
{
    
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('waste_types');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        // $this->belongsTo('States', [
        //     'foreignKey' => 'state_id',
        //     'joinType' => 'LEFT',
        // ]);
       
    }   
}
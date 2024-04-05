<?php
declare(strict_types=1);
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class WasteProductDetailsTable extends Table
{
    
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('waste_product_details');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->belongsTo('WasteTypes', [
            'foreignKey' => 'waste_type_id',
            'joinType' => 'LEFT',
        ]);
        $this->belongsTo('WasteCategories', [
            'foreignKey' => 'waste_category_id',
            'joinType' => 'LEFT',
        ]);
       
    }   
}
<?php
declare(strict_types=1);
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class ProductMgmtDetailsTable extends Table
{
    
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('product_mgmt_details');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->belongsTo('WasteTypes', [
            'foreignKey' => 'waste_type_id',
            'joinType' => 'LEFT',
        ]);

        $this->belongsTo('Eprcertification', [
            'foreignKey' => 'epr_certification_id',
            'joinType' => 'LEFT',
        ]);

        $this->belongsTo('WasteCategories', [
            'foreignKey' => 'waste_category_id',
            'joinType' => 'LEFT',
        ]);

        $this->belongsTo('WasteProductDetails', [
            'foreignKey' => 'waste_product_detail_id',
            'joinType' => 'LEFT',
        ]);

       
    }   
}
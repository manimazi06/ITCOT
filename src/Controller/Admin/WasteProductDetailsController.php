<?php
declare(strict_types=1); 
namespace App\Controller\Admin;
use Cake\Datasource\ConnectionManager;


use Cake\Core\Configure;
use Cake\Http\Exception\ForbiddenException;
use Cake\Http\Exception\NotFoundException;
use Cake\Http\Response;
use Cake\View\Exception\MissingTemplateException;

class WasteProductDetailsController extends AppController
{
    
	public function index(){
		$this->viewBuilder()->setLayout('layout');
		$this->loadModel('WasteTypes');
		$this->loadModel('WasteCategories');

	
		
		$wasteProductDetails  = $this->WasteProductDetails->find('all')->contain(['WasteTypes','WasteCategories'])->toArray();

		//echo "<pre>"; print_r($wasteProductDetails);  exit();
		$this->set(compact('wasteProductDetails'));   
	}	  
	
	public function add()
	{
		$this->viewBuilder()->setLayout('layout');
		$this->loadModel('WasteTypes');
		$this->loadModel('WasteCategories');

			$user_id = $this->Auth->user('id');
		$wasteProductDetails = $this->WasteProductDetails->newEmptyEntity();
		if ($this->request->is('post')) { //echo "<pre>"; print_r($this->request->getData());  exit();
			$wasteProductDetails->waste_type_id         = $this->request->getData('waste_type_id');
			$wasteProductDetails->waste_category_id         = $this->request->getData('waste_category_id');
			$wasteProductDetails->product_code                  = $this->request->getData('product_code');
			$wasteProductDetails->product_type                  = $this->request->getData('product_type');
			$wasteProductDetails->product_name                  = $this->request->getData('product_name');
		
			$wasteProductDetails->created_by            = $this->Auth->user('id');
			$wasteProductDetails->created_date          = date('Y-m-d H:i:s');
			if ($this->WasteProductDetails->save($wasteProductDetails)) {
				$this->Flash->success(__('The Waste ProductDetails details has been saved.'));
				return $this->redirect(['action' => 'index']);
			}
			$this->Flash->error(__('The Waste ProductDetails  details could not be saved. Please, try again.'));
		}
		$wasteTypes = $this->WasteTypes->find('list',['keyField' => 'id',  'valueField' => 'name'])->toArray();
		
	
		//echo "<pre>"; print_r($schemes);  exit();


			$this->set(compact('scheme','wasteProductDetails','wasteTypes'));
	}
	
	public function edit($id = null)
	{
		$this->viewBuilder()->setLayout('layout');
		$this->loadModel('WasteTypes');
		$this->loadModel('WasteCategories');


		$wasteProductDetails = $this->WasteProductDetails->get($id, [
			'contain' => [],
		]);

		// echo '<pre>';
		// 	print_r($wasteProductDetails);
		// 	exit();

		if ($this->request->is(['patch', 'post', 'put'])) {
			$wasteProductDetails= $this->WasteProductDetails->patchEntity($wasteProductDetails, $this->request->getData());

			$wasteProductDetails->waste_type_id         = $this->request->getData('waste_type_id');
			$wasteProductDetails->waste_category_id         = $this->request->getData('waste_category_id');
			$wasteProductDetails->product_code                  = $this->request->getData('product_code');
			$wasteProductDetails->product_type                  = $this->request->getData('product_type');
			$wasteProductDetails->product_name                  = $this->request->getData('product_name');
			$wasteProductDetails->modified_by            = $this->Auth->user('id');
			$wasteProductDetails->modified_date          = date('Y-m-d H:i:s');

			// echo '<pre>';
			// print_r($wasteProductDetails);
			// exit();
			if ($this->WasteProductDetails->save($wasteProductDetails)) {
				$this->Flash->success(__('The Waste ProductDetails details has been updated.'));
				return $this->redirect(['action' => 'index']);
			}

			$this->Flash->error(__('The Waste ProductDetails  details could not be updated. Please, try again.'));
		}	
		$wasteTypes = $this->WasteTypes->find('list',['keyField' => 'id',  'valueField' => 'name'])->toArray();
		$wasteproduct = $this->WasteProductDetails->find('list',['keyField' => 'id',  'valueField' => 'name'])->where(['WasteProductDetails.waste_category_id' => $wasteProductDetails['waste_category_id']])->toArray();
		$wasteCategories = $this->WasteCategories->find('list',['keyField' => 'id',  'valueField' => 'name'])->toArray();
		// echo '<pre>';
		// print_r($wasteproduct);
		// exit();
		$this->set(compact('wasteTypes','wasteProductDetails','wasteCategories'));
	}
	
	public function delete($id = null)
    {
		// echo '<pre>';
		// print_r($id);
		// exit();
		$this->request->is(['patch', 'post', 'delete']);
		$Project2Table           = $this->getTableLocator()->get('WasteProductDetails');
		$project2                = $Project2Table->get($id); 
		$project2->is_active        = 0;
		$project2->modified_date = date('Y-m-d H:i:s');  
		// echo '<pre>';
		// print_r($project2);
		// exit();
	    if ($this->WasteProductDetails->save($project2)) {
            $this->Flash->success(__('The Waste ProductDetails has been deleted.'));
        } else {
            $this->Flash->error(__('The Waste ProductDetails could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
	
}
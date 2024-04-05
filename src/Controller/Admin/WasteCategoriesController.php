<?php
declare(strict_types=1); 
namespace App\Controller\Admin;
use Cake\Datasource\ConnectionManager;


use Cake\Core\Configure;
use Cake\Http\Exception\ForbiddenException;
use Cake\Http\Exception\NotFoundException;
use Cake\Http\Response;
use Cake\View\Exception\MissingTemplateException;

class WasteCategoriesController extends AppController
{
    
	public function index(){
		$this->viewBuilder()->setLayout('layout');
		$this->loadModel('WasteTypes');

	
		
		$wasteCategories  = $this->WasteCategories->find('all')->contain(['WasteTypes'])->where(['WasteCategories.is_active'=>1])->toArray();

		//echo "<pre>"; print_r($wasteCategories);  exit();
		$this->set(compact('wasteCategories'));   
	}	  
	
	public function add()
	{
		$this->viewBuilder()->setLayout('layout');
		$this->loadModel('WasteTypes');

			$user_id = $this->Auth->user('id');
		$wasteCategories = $this->WasteCategories->newEmptyEntity();
		if ($this->request->is('post')) { //echo "<pre>"; print_r($this->request->getData());  exit();
			$wasteCategories->waste_type_id         = $this->request->getData('waste_type_id');
	
			$wasteCategories->name                  = $this->request->getData('name');
		
			$wasteCategories->created_by            = $this->Auth->user('id');
			$wasteCategories->created_date          = date('Y-m-d H:i:s');
			if ($this->WasteCategories->save($wasteCategories)) {
				$this->Flash->success(__('The Waste Categories details has been saved.'));
				return $this->redirect(['action' => 'index']);
			}
			$this->Flash->error(__('The Waste Categories  details could not be saved. Please, try again.'));
		}
		$wasteTypes = $this->WasteTypes->find('list',['keyField' => 'id',  'valueField' => 'name'])->toArray();
	
		//echo "<pre>"; print_r($schemes);  exit();


			$this->set(compact('scheme','departments','wasteTypes'));
	}
	
	public function edit($id = null)
	{
		$this->viewBuilder()->setLayout('layout');
		$this->loadModel('WasteTypes');



		$wasteCategories = $this->WasteCategories->get($id, [
			'contain' => [],
		]);

		if ($this->request->is(['patch', 'post', 'put'])) {
			$wasteCategories= $this->WasteCategories->patchEntity($wasteCategories, $this->request->getData());
			$wasteCategories->waste_type_id         = $this->request->getData('waste_type_id');
	
			$wasteCategories->name                  = $this->request->getData('name');
			$wasteProductDetails->modified_by            = $this->Auth->user('id');
			$wasteProductDetails->modified_date          = date('Y-m-d H:i:s');
			if ($this->WasteCategories->save($wasteCategories)) {
				$this->Flash->success(__('The Waste Categories details has been updated.'));
				return $this->redirect(['action' => 'index']);
			}
			$this->Flash->error(__('The Waste Categories  details could not be updated. Please, try again.'));
		}	
		$wasteTypes = $this->WasteTypes->find('list',['keyField' => 'id',  'valueField' => 'name'])->toArray();
		$this->set(compact('wasteTypes','wasteCategories'));
	}
	
	public function delete($id = null)
    {
		// echo '<pre>';
		// print_r($id);
		// exit();
		$this->request->is(['patch', 'post', 'delete']);
		$Project2Table           = $this->getTableLocator()->get('WasteCategories');
		$project2                = $Project2Table->get($id); 
		$project2->is_active        = 0;
		$project2->modified_date = date('Y-m-d H:i:s');  
		// echo '<pre>';
		// print_r($project2);
		// exit();
	    if ($this->WasteCategories->save($project2)) {
            $this->Flash->success(__('The WasteCategories has been deleted.'));
        } else {
            $this->Flash->error(__('The WasteCategories could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
	
}
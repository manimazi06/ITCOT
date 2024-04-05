<?php
declare(strict_types=1); 
namespace App\Controller\Admin;
use Cake\Datasource\ConnectionManager;


use Cake\Core\Configure;
use Cake\Http\Exception\ForbiddenException;
use Cake\Http\Exception\NotFoundException;
use Cake\Http\Response;
use Cake\View\Exception\MissingTemplateException;

class WasteTypesController extends AppController
{
    
	public function index(){
		//echo "hi"; exit();
		$this->viewBuilder()->setLayout('layout');
	
		 $wasteTypes = $this->WasteTypes->find('all')->where(['WasteTypes.is_active'=>1])->toArray();	

		$this->set(compact('wasteTypes'));   
	}	
  
	
	public function add()
	{
		$this->viewBuilder()->setLayout('layout');
		$wasteTypes= $this->WasteTypes->newEmptyEntity();
		if ($this->request->is('post')) { //echo "<pre>"; print_r($this->request->getData());  exit();
			//$WasteTypes= $this->LoanTypes->patchEntity($WasteTypes, $this->request->getData());
			$wasteTypes->name                = $this->request->getData('name');

			//$WasteTypes->description         = $this->request->getData('description');
			if ($this->WasteTypes->save($wasteTypes)) {
				$this->Flash->success(__('The WasteTypes details has been saved.'));
				return $this->redirect(['action' => 'index']);
			}
			$this->Flash->error(__('The WasteTypes details could not be saved. Please, try again.'));
		}
			$this->set(compact('wasteTypes'));
	}
	
	public function edit($id = null)
	{
		$this->viewBuilder()->setLayout('layout');

		$wasteTypes= $this->WasteTypes->get($id, [
			'contain' => [],
		]);

		if ($this->request->is(['patch', 'post', 'put'])) {


			$wasteTypes= $this->WasteTypes->patchEntity($wasteTypes, $this->request->getData());
			$wasteTypes->name                = $this->request->getData('name');
			//$WasteTypes->description         = $this->request->getData('description');

			if ($this->WasteTypes->save($wasteTypes)) {
				$this->Flash->success(__('The WasteTypes details has been updated.'));

				return $this->redirect(['action' => 'index']);
			}
			$this->Flash->error(__('The WasteTypes details could not be updated. Please, try again.'));
		}		
		$this->set(compact('wasteTypes'));
	}
	
	public function delete($id = null)
    {
		// echo '<pre>';
		// print_r($id);
		// exit();
		$this->request->is(['patch', 'post', 'delete']);
		$Project2Table           = $this->getTableLocator()->get('WasteTypes');
		$project2                = $Project2Table->get($id); 
		$project2->is_active        = 0;
		$project2->modified_date = date('Y-m-d H:i:s');  
		// echo '<pre>';
		// print_r($project2);
		// exit();
	    if ($this->WasteTypes->save($project2)) {
            $this->Flash->success(__('The WasteTypes has been deleted.'));
        } else {
            $this->Flash->error(__('The WasteTypes could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
	
}
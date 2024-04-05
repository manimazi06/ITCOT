<?php
declare(strict_types=1); 
namespace App\Controller\Admin;
use Cake\Datasource\ConnectionManager;


use Cake\Core\Configure;
use Cake\Http\Exception\ForbiddenException;
use Cake\Http\Exception\NotFoundException;
use Cake\Http\Response;
use Cake\View\Exception\MissingTemplateException;

class VirtualcfoStatesController extends AppController
{
    
	public function index(){
		//echo "hi"; exit();
		$this->viewBuilder()->setLayout('layout');
		$virtualcfoStates = $this->VirtualcfoStates->find('all')->toArray();		
		$this->set(compact('virtualcfoStates'));  
	 
	}	
  
	
	public function add()
	{
		$this->viewBuilder()->setLayout('layout');
		

		$virtualcfoStates = $this->VirtualcfoStates->newEmptyEntity();
		if ($this->request->is('post')) { 
//echo "<pre>"; print_r($this->request->getData());  exit();
			//$scheme = $this->SchemeTypes->patchEntity($scheme, $this->request->getData());
			
			$virtualcfoStates->name                = $this->request->getData('name');
			$virtualcfoStates->description         = $this->request->getData('description');
				//echo "<pre>"; print_r($scheme);  exit()
			if ($this->VirtualcfoStates->save($virtualcfoStates)) {
				$this->Flash->success(__('The Virtualcfo States has been saved.'));
				return $this->redirect(['action' => 'index']);
			}
			$this->Flash->error(__('The Virtualcfo States could not be saved. Please, try again.'));
		}
		
		
		//echo "<pre>"; print_r($schemes);  exit();


			$this->set(compact('virtualcfoStates'));
	}
	
	public function edit($id = null)
	{
		$this->viewBuilder()->setLayout('layout');
		


		$virtualcfoStates = $this->VirtualcfoStates->get($id, [
			'contain' => [],
		]);

		if ($this->request->is(['patch', 'post', 'put'])) {


			$virtualcfoStates = $this->VirtualcfoStates->patchEntity($virtualcfoStates, $this->request->getData());

			
				
			$virtualcfoStates->name                = $this->request->getData('name');
			$virtualcfoStates->description         = $this->request->getData('description');

			if ($this->VirtualcfoStates->save($virtualcfoStates)) {
				$this->Flash->success(__('The Virtualcfo States has been updated.'));

				return $this->redirect(['action' => 'index']);
			}
			$this->Flash->error(__('The Virtualcfo States could not be updated. Please, try again.'));
		}	
		
		$this->set(compact('virtualcfoStates'));
	}
	
	
	
}
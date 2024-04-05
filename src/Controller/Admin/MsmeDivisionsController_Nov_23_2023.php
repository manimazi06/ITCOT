<?php
declare(strict_types=1); 
namespace App\Controller\Admin;
use Cake\Datasource\ConnectionManager;


use Cake\Core\Configure;
use Cake\Http\Exception\ForbiddenException;
use Cake\Http\Exception\NotFoundException;
use Cake\Http\Response;
use Cake\View\Exception\MissingTemplateException;

class MsmeDivisionsController extends AppController
{
    
	public function index()
	{
	//echo "hi"; exit();
	$this->viewBuilder()->setLayout('layout');
	$Msmedivisions = $this->MsmeDivisions->find('all')->toArray();
	

// echo '<pre>';
// print_r($Msmedivisions);
// exit();
	$this->set(compact('Msmedivisions')); 
	}	
  
	
	public function add()
	{
		$this->viewBuilder()->setLayout('layout');
		$Msmedivisions = $this->MsmeDivisions->newEmptyEntity();
		if ($this->request->is('post')) { //echo "<pre>"; print_r($this->request->getData());  exit();
			//$Msmedivisions = $this->MsmeDivisions->patchEntity($Msmedivisions, $this->request->getData());
			$Msmedivisions->name                = $this->request->getData('name');
			
			if ($this->MsmeDivisions->save($Msmedivisions)) {
				$this->Flash->success(__('The MsmeDivisions has been saved.'));
				return $this->redirect(['action' => 'index']);
			}
			$this->Flash->error(__('The MsmeDivisions could not be saved. Please, try again.'));
		}
			$this->set(compact('Msmedivisions', 'roles', 'circles'));
	}
	
	public function edit($id = null)
	{
		$this->viewBuilder()->setLayout('layout');

		$Msmedivisions = $this->MsmeDivisions->get($id, [
			'contain' => [],
		]);

		if ($this->request->is(['patch', 'post', 'put'])) {


			$Msmedivisions = $this->MsmeDivisions->patchEntity($Msmedivisions, $this->request->getData());
			$Msmedivisions->name                = $this->request->getData('name');
			

			if ($this->MsmeDivisions->save($Msmedivisions)) {
				$this->Flash->success(__('The MsmeDivisions has been updated.'));

				return $this->redirect(['action' => 'index']);
			}
			$this->Flash->error(__('The MsmeDivisions could not be updated. Please, try again.'));
		}		
		$this->set(compact('Msmedivisions'));
	}
	
	
	
}
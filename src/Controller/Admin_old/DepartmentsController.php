<?php
declare(strict_types=1); 
namespace App\Controller\Admin;
use Cake\Datasource\ConnectionManager;


use Cake\Core\Configure;
use Cake\Http\Exception\ForbiddenException;
use Cake\Http\Exception\NotFoundException;
use Cake\Http\Response;
use Cake\View\Exception\MissingTemplateException;

class DepartmentsController extends AppController
{
    
	public function index(){
		//echo "hi"; exit();
		$this->viewBuilder()->setLayout('layout'); 
	    $departments  = $this->Departments->find('all')->contain(['SchemeTypes'])->toArray();	
		$this->set(compact('departments'));   
	}	
  
	
	public function add()
	{
		$this->viewBuilder()->setLayout('layout');
		$this->loadModel('SchemeTypes');
			$user_id = $this->Auth->user('id');
		$scheme = $this->Departments->newEmptyEntity();
		if ($this->request->is('post')) { 
//echo "<pre>"; print_r($this->request->getData());  exit();
			//$scheme = $this->Departments->patchEntity($scheme, $this->request->getData());
			$scheme->scheme_type_id= $this->request->getData('scheme_type_id');
			$scheme->name                = $this->request->getData('name');
			$scheme->description         = $this->request->getData('description');
			$scheme->created_by          = $this->Auth->user('id');
			$scheme->created_date        =date('Y-m-d H:i:s');

				//echo "<pre>"; print_r($scheme);  exit()
			if ($this->Departments->save($scheme)) {
				$this->Flash->success(__('The Departments details has been saved.'));
				return $this->redirect(['action' => 'index']);
			}
			$this->Flash->error(__('The Departments details could not be saved. Please, try again.'));
		}
		$schemes = $this->SchemeTypes->find('list')->all();
		//echo "<pre>"; print_r($schemes);  exit();


			$this->set(compact('scheme','schemes'));
	}
	
	public function edit($id = null)
	{
		$this->viewBuilder()->setLayout('layout');
		$this->loadModel('SchemeTypes');


		$scheme = $this->Departments->get($id, [
			'contain' => [],
		]);

		if ($this->request->is(['patch', 'post', 'put'])) {


			//$scheme = $this->Departments->patchEntity($user, $this->request->getData());

			$scheme->scheme_type_id= $this->request->getData('scheme_type_id');
			$scheme->name                = $this->request->getData('name');
			$scheme->description         = $this->request->getData('description');

			if ($this->Departments->save($scheme)) {
				$this->Flash->success(__('The Departments details has been updated.'));

				return $this->redirect(['action' => 'index']);
			}
			$this->Flash->error(__('The Departments details could not be updated. Please, try again.'));
		}	
		$schemes = $this->SchemeTypes->find('list')->all();	
		$this->set(compact('scheme','schemes'));
	}
	
	
	
}
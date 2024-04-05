<?php

declare(strict_types=1);

namespace App\Controller\Admin;

use Cake\Datasource\ConnectionManager;


use Cake\Core\Configure;
use Cake\Http\Exception\ForbiddenException;
use Cake\Http\Exception\NotFoundException;
use Cake\Http\Response;
use Cake\View\Exception\MissingTemplateException;

class DistrictwisePincodedetailsController extends AppController
{

	public function index()
	{
		$this->viewBuilder()->setLayout('layout');
		$this->loadModel('Districts');

		
	    if ($this->request->is(['patch', 'post', 'put'])) { 
			$district_id= $this->request->getData('district_id');	
		    $districtwisePincodedetails  = $this->DistrictwisePincodedetails->find('all')->where(['DistrictwisePincodedetails.is_active' => 1,'DistrictwisePincodedetails.district_id'=>$district_id])->contain(['Districts'])->order(['DistrictwisePincodedetails.district_id' => 'ASC','DistrictwisePincodedetails.pincode' => 'ASC'])->toArray();
		 }else{
		    $districtwisePincodedetails  = $this->DistrictwisePincodedetails->find('all')->where(['DistrictwisePincodedetails.is_active' => 1])->contain(['Districts'])->order(['DistrictwisePincodedetails.district_id' => 'ASC','DistrictwisePincodedetails.pincode' => 'ASC'])->toArray();
		 }		
		
		$districts = $this->Districts->find('list', ['keyField' => 'id',  'valueField' => 'name'])->where(['Districts.is_active' => 1])->toArray();


		$this->set(compact('districtwisePincodedetails','districts'));
	}


	public function add()
	{
		$this->viewBuilder()->setLayout('layout');
		$this->loadModel('Districts');
		$user_id = $this->Auth->user('id');
		$districtwisePincodedetails = $this->DistrictwisePincodedetails->newEmptyEntity();
		if ($this->request->is('post')) {
			
			$districtwisePincodedetails->district_id             = $this->request->getData('district_id');
			// $districtwisePincodedetails->location             = $this->request->getData('location');
			$districtwisePincodedetails->pincode                 = $this->request->getData('pincode');
			$districtwisePincodedetails->created_by              = $this->Auth->user('id');
			$districtwisePincodedetails->created_date            = date('Y-m-d H:i:s');

			if ($this->DistrictwisePincodedetails->save($districtwisePincodedetails)) {
				$this->Flash->success(__('The Districtwise Pincode details has been saved.'));
				return $this->redirect(['action' => 'index']);
			}
			$this->Flash->error(__('The Districtwise Pincode details could not be saved. Please, try again.'));
		}
		$districts = $this->Districts->find('list', ['keyField' => 'id',  'valueField' => 'name'])->where(['Districts.is_active' => 1])->toArray();
		//echo "<pre>"; print_r($schemes);  exit();


		$this->set(compact('districtwisePincodedetails', 'districts'));
	}

	public function edit($id = null)
	{
		$this->viewBuilder()->setLayout('layout');
		$this->loadModel('Districts');

		$districtwisePincodedetails = $this->DistrictwisePincodedetails->get($id, [
			'contain' => [],
		]);

		if ($this->request->is(['patch', 'post', 'put'])) {

			$districtwisePincodedetails = $this->DistrictwisePincodedetails->patchEntity($districtwisePincodedetails, $this->request->getData());
			$districtwisePincodedetails->district_id             = $this->request->getData('district_id');
			// $districtwisePincodedetails->location                = $this->request->getData('location');
			$districtwisePincodedetails->pincode                 = $this->request->getData('pincode');
			$districtwisePincodedetails->modified_by             = $this->Auth->user('id');
			$districtwisePincodedetails->modified_date	         = date('Y-m-d H:i:s');

			if ($this->DistrictwisePincodedetails->save($districtwisePincodedetails)) {
				$this->Flash->success(__('The Districtwise Pincode details has been saved.'));
				return $this->redirect(['action' => 'index']);
			}
			$this->Flash->error(__('The Districtwise Pincode details could not be saved. Please, try again.'));
		}
		$districts = $this->Districts->find('list', ['keyField' => 'id',  'valueField' => 'name'])->where(['Districts.is_active' => 1])->toArray();
		$this->set(compact('districtwisePincodedetails', 'districts'));
	}

	public function delete($id = null)
	{
		// echo '<pre>';
		// print_r($id);
		// exit();
		$this->request->is(['patch', 'post', 'delete']);
		$Project2Table           = $this->getTableLocator()->get('DistrictwisePincodedetails');
		$project2                = $Project2Table->get($id);
		$project2->is_active        = 0;
		$project2->modified_date = date('Y-m-d H:i:s');
		// echo '<pre>';
		// print_r($project2);
		// exit();
		if ($this->DistrictwisePincodedetails->save($project2)) {
			$this->Flash->success(__('The Districtwise Pincode details has been deleted.'));
		} else {
			$this->Flash->error(__('The Districtwise Pincode details could not be deleted. Please, try again.'));
		}

		return $this->redirect(['action' => 'index']);
	}
}

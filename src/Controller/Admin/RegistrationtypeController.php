<?php
declare(strict_types=1); 
namespace App\Controller\Admin;
use Cake\Datasource\ConnectionManager;


use Cake\Core\Configure;
use Cake\Http\Exception\ForbiddenException;
use Cake\Http\Exception\NotFoundException;
use Cake\Http\Response;
use Cake\View\Exception\MissingTemplateException;

class RegistrationtypeController extends AppController
{
    
	public function index(){
		//echo "hi"; exit();
		$this->viewBuilder()->setLayout('layout');
		$registrationtypes = $this->Registrationtype->find('all')->where(['Registrationtype.is_active'=>1])->toArray();
		
	
	//echo"<pre>";print_r($pressReleases);exit();
		$this->set(compact('registrationtypes'));   
	}	
  
	
	public function add()
	{
		$this->viewBuilder()->setLayout('layout');
		$registrationtype= $this->Registrationtype->newEmptyEntity();
		if ($this->request->is('post')) { //echo "<pre>"; print_r($this->request->getData());  exit();
			//$States= $this->LoanTypes->patchEntity($States, $this->request->getData());
		
			$registrationtype->name                = $this->request->getData('name');
			$registrationtype->description         = $this->request->getData('description');
		
			$registrationtype_check  = $this->Registrationtype->find('all')->where(['Registrationtype.name'=>$registrationtype->name])->count();


			if($registrationtype_check>0){
				$this->Flash->error(__('The Registrationtype details already present. Please, try again.'));
				//return $this->redirect(['action' => 'index']);

		}else{
			$this->Registrationtype->save($registrationtype);
			$this->Flash->success(__('The Registrationtype details has been saved.'));
			return $this->redirect(['action' => 'index']);
		}

			//$States->description         = $this->request->getData('description');
			// if ($this->Registrationtype->save($registrationtype)) {
			// 	$this->Flash->success(__('The Registrationtype details has been saved.'));
			// 	return $this->redirect(['action' => 'index']);
			// }
			// $this->Flash->error(__('The Registrationtype details could not be saved. Please, try again.'));
		}
			$this->set(compact('registrationtype'));
	}
	
	public function edit($id = null)
	{
		$this->viewBuilder()->setLayout('layout');

		$registrationtype= $this->Registrationtype->get($id, [
			'contain' => [],
		]);

		if ($this->request->is(['patch', 'post', 'put'])) {


			$registrationtype= $this->Registrationtype->patchEntity($registrationtype, $this->request->getData());
			
			$registrationtype->name                = $this->request->getData('name');
			$registrationtype->description                = $this->request->getData('description');
	
			$registrationtype_check  = $this->Registrationtype->find('all')->where(['Registrationtype.name'=>$registrationtype->name,
			'Registrationtype.id!='=>$id])->count();


			if($registrationtype_check>0){
				$this->Flash->error(__('The Registrationtype details already present. Please, try again.'));
				//return $this->redirect(['action' => 'index']);

		}else{
			$this->Registrationtype->save($registrationtype);
			$this->Flash->success(__('The Registrationtype details has been saved.'));
			return $this->redirect(['action' => 'index']);
		}

			//$States->description         = $this->request->getData('description');

			// if ($this->Registrationtype->save($registrationtype)) {
			// 	$this->Flash->success(__('The Registrationtype details has been updated.'));

			// 	return $this->redirect(['action' => 'index']);
			// }
			// $this->Flash->error(__('The Registrationtype details could not be updated. Please, try again.'));
		}		
		$this->set(compact('registrationtype'));
	}
	
	public function delete($id = null)
    {
		// echo '<pre>';
		// print_r($id);
		// exit();
		$this->request->is(['patch', 'post', 'delete']);
		$Project2Table           = $this->getTableLocator()->get('Registrationtype');
		$project2                = $Project2Table->get($id); 
		$project2->is_active        = 0;
		$project2->modified_date = date('Y-m-d H:i:s');  
		// echo '<pre>';
		// print_r($project2);
		// exit();
	    if ($this->Registrationtype->save($project2)) {
            $this->Flash->success(__('The Registrationtype has been deleted.'));
        } else {
            $this->Flash->error(__('The Registrationtype could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
	
}
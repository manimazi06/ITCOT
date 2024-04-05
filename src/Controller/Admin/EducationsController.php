<?php
declare(strict_types=1); 
namespace App\Controller\Admin;
use Cake\Datasource\ConnectionManager;


use Cake\Core\Configure;
use Cake\Http\Exception\ForbiddenException;
use Cake\Http\Exception\NotFoundException;
use Cake\Http\Response;
use Cake\View\Exception\MissingTemplateException;

class EducationsController extends AppController
{
    
	public function index(){
		$this->viewBuilder()->setLayout('layout');
	    $educations = $this->Educations->find('all')->where(['Educations.is_active'=>1])->toArray();	
		$this->set(compact('educations'));   
	}	  
	
	public function add()
	{
		$this->viewBuilder()->setLayout('layout');
		$Educations = $this->Educations->newEmptyEntity();
		if ($this->request->is('post')) { //echo "<pre>"; print_r($this->request->getData());  exit();
			$Educations->name                = $this->request->getData('name');

			$Educations_check  = $this->Educations->find('all')->where(['Educations.name'=>$Educations->name])->count();


			if($Educations_check>0){
				$this->Flash->error(__('The Education details already present. Please, try again.'));
				//return $this->redirect(['action' => 'index']);

		}else{
			$this->Educations->save($Educations);
			$this->Flash->success(__('The Education details has been saved.'));
			return $this->redirect(['action' => 'index']);
		}

			// if ($this->Educations->save($Educations)) {
			// 	$this->Flash->success(__('The Educations details has been saved.'));
			// 	return $this->redirect(['action' => 'index']);
			// }
			// $this->Flash->error(__('The Educations details could not be saved. Please, try again.'));
		}
			$this->set(compact('Educations'));
	}
	
	public function edit($id = null)
	{
		$this->viewBuilder()->setLayout('layout');
		$Educations = $this->Educations->get($id, [
			'contain' => [],
		]);
		if ($this->request->is(['patch', 'post', 'put'])) {
			$Educations = $this->Schemes->patchEntity($Educations, $this->request->getData());
			$Educations ->name                = $this->request->getData('name');
			
			$Educations_check  = $this->Educations->find('all')->where(['Educations.name'=>$Educations->name,'Educations.id!='=>$id])->count();


			if($Educations_check>0){
				$this->Flash->error(__('The Education details already present. Please, try again.'));
				//return $this->redirect(['action' => 'index']);

		}else{
			$this->Educations->save($Educations);
			$this->Flash->success(__('The Education details has been saved.'));
			return $this->redirect(['action' => 'index']);
		}
			// if ($this->Educations->save($Educations)) {
			// 	$this->Flash->success(__('The Educations details has been updated.'));

			// 	return $this->redirect(['action' => 'index']);
			// }
			// $this->Flash->error(__('The Educations details could not be updated. Please, try again.'));
		}		
		$this->set(compact('Educations'));
	}
	public function delete($id = null)
    {
		// echo '<pre>';
		// print_r($id);
		// exit();
		$this->request->is(['patch', 'post', 'delete']);
		$Project2Table           = $this->getTableLocator()->get('Educations');
		$project2                = $Project2Table->get($id); 
		$project2->is_active        = 0;
		$project2->modified_date = date('Y-m-d H:i:s');  
		// echo '<pre>';
		// print_r($project2);
		// exit();
	    if ($this->Educations->save($project2)) {
            $this->Flash->success(__('The Educations has been deleted.'));
        } else {
            $this->Flash->error(__('The Educations could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
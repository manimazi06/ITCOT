<?php
declare(strict_types=1); 
namespace App\Controller\Admin;
use Cake\Datasource\ConnectionManager;


use Cake\Core\Configure;
use Cake\Http\Exception\ForbiddenException;
use Cake\Http\Exception\NotFoundException;
use Cake\Http\Response;
use Cake\View\Exception\MissingTemplateException;

class UnitsController extends AppController
{
    
	public function index(){
		//echo "hi"; exit();
		$this->viewBuilder()->setLayout('layout');
		$units = $this->Units->find('all')->where(['Units.is_active'=>1])->toArray();
		
	
	//echo"<pre>";print_r($pressReleases);exit();
		$this->set(compact('units'));   
	}	
  
	
	public function add()
	{
		$this->viewBuilder()->setLayout('layout');
		$units= $this->Units->newEmptyEntity();
		if ($this->request->is('post')) { //echo "<pre>"; print_r($this->request->getData());  exit();
			//$States= $this->LoanTypes->patchEntity($States, $this->request->getData());
		
			$units->name                = $this->request->getData('name');
			$units->description                = $this->request->getData('description');
		
			$units_check  = $this->Units->find('all')->where(['Units.name'=>$units->name])->count();


			if($units_check>0){
				$this->Flash->error(__('The Units details already present. Please, try again.'));
				//return $this->redirect(['action' => 'index']);

		}else{
			$this->Units->save($units);
			$this->Flash->success(__('The Units details has been saved.'));
			return $this->redirect(['action' => 'index']);
		}


			//$States->description         = $this->request->getData('description');
			// if ($this->Units->save($units)) {
			// 	$this->Flash->success(__('The Units details has been saved.'));
			// 	return $this->redirect(['action' => 'index']);
			// }
			// $this->Flash->error(__('The Units details could not be saved. Please, try again.'));
		}
			$this->set(compact('units'));
	}
	
	public function edit($id = null)
	{
		$this->viewBuilder()->setLayout('layout');

		$units= $this->Units->get($id, [
			'contain' => [],
		]);

		if ($this->request->is(['patch', 'post', 'put'])) {


			$units= $this->Units->patchEntity($units, $this->request->getData());
			
			$units->name                = $this->request->getData('name');
			$units->description                = $this->request->getData('description');
	
			$units_check  = $this->Units->find('all')->where(['Units.name'=>$units->name,'Units.id!='=>$id])->count();


			if($units_check>0){
				$this->Flash->error(__('The Units details already present. Please, try again.'));
				//return $this->redirect(['action' => 'index']);

		}else{
			$this->Units->save($units);
			$this->Flash->success(__('The Units details has been saved.'));
			return $this->redirect(['action' => 'index']);
		}

			//$States->description         = $this->request->getData('description');

			// if ($this->Units->save($units)) {
			// 	$this->Flash->success(__('The Units details has been updated.'));

			// 	return $this->redirect(['action' => 'index']);
			// }
			// $this->Flash->error(__('The Units details could not be updated. Please, try again.'));
		}		
		$this->set(compact('units'));
	}
	
	
	public function delete($id = null)
    {
		// echo '<pre>';
		// print_r($id);
		// exit();
		$this->request->is(['patch', 'post', 'delete']);
		$Project2Table           = $this->getTableLocator()->get('Units');
		$project2                = $Project2Table->get($id); 
		$project2->is_active        = 0;
		$project2->modified_date = date('Y-m-d H:i:s');  
		// echo '<pre>';
		// print_r($project2);
		// exit();
	    if ($this->Units->save($project2)) {
            $this->Flash->success(__('The Units has been deleted.'));
        } else {
            $this->Flash->error(__('The Units could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
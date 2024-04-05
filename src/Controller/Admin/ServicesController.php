<?php
declare(strict_types=1); 
namespace App\Controller\Admin;
use Cake\Datasource\ConnectionManager;
use Cake\Core\Configure;
use Cake\Http\Exception\ForbiddenException;
use Cake\Http\Exception\NotFoundException;
use Cake\Http\Response;
use Cake\View\Exception\MissingTemplateException;

class ServicesController extends AppController
{
    
	public function index(){
		$this->viewBuilder()->setLayout('layout');		
		 $services = $this->Services->find('all')->where(['Services.is_active'=>1])->toArray();	
		$this->set(compact('services'));   
	}	
  
	
	public function add()
	{
		$this->viewBuilder()->setLayout('layout');
		$services= $this->Services->newEmptyEntity();
		if ($this->request->is('post')) { //echo "<pre>"; print_r($this->request->getData());  exit();
			$services->name                = $this->request->getData('name');

			$services_check  = $this->Services->find('all')->where(['Services.name'=>$services->name])->count();


			if($services_check>0){
				$this->Flash->error(__('The Services details already present. Please, try again.'));
				//return $this->redirect(['action' => 'index']);

		}else{
			$this->Services->save($services);
			$this->Flash->success(__('The Services details has been saved.'));
			return $this->redirect(['action' => 'index']);
		}
			// if ($this->Services->save($services)) {
			// 	$this->Flash->success(__('The Services details has been saved.'));
			// 	return $this->redirect(['action' => 'index']);
			// }
			// $this->Flash->error(__('The Services details could not be saved. Please, try again.'));
		}
			$this->set(compact('services'));
	}
	
	public function edit($id = null)
	{
		$this->viewBuilder()->setLayout('layout');
		$services= $this->Services->get($id, [
			'contain' => [],
		]);
		// echo "<pre>"; print_r($states);
		// exit();
		if ($this->request->is(['patch', 'post', 'put'])) {
			
			$services= $this->Services->patchEntity($services, $this->request->getData());
			$services->name                = $this->request->getData('name');

			$services_check  = $this->Services->find('all')->where(['Services.name'=>$services->name,'Services.id!='=>$id])->count();


			if($services_check>0){
				$this->Flash->error(__('The Services details already present. Please, try again.'));
				//return $this->redirect(['action' => 'index']);

		}else{
			$this->Services->save($services);
			$this->Flash->success(__('The Services details has been saved.'));
			return $this->redirect(['action' => 'index']);
		}

			// if ($this->Services->save($services)) {
			// 	$this->Flash->success(__('The Services details has been updated.'));

			// 	return $this->redirect(['action' => 'index']);
			// }
			// $this->Flash->error(__('The Services details could not be updated. Please, try again.'));
		}		
		$this->set(compact('services'));
	}	

	public function delete($id = null)
    {
		// echo '<pre>';
		// print_r($id);
		// exit();
		$this->request->is(['patch', 'post', 'delete']);
		$Project2Table           = $this->getTableLocator()->get('Services');
		$project2                = $Project2Table->get($id); 
		$project2->is_active        = 0;
		$project2->modified_date = date('Y-m-d H:i:s');  
		// echo '<pre>';
		// print_r($project2);
		// exit();
	    if ($this->Services->save($project2)) {
            $this->Flash->success(__('The Services has been deleted.'));
        } else {
            $this->Flash->error(__('The Services could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
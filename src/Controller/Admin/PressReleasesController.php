<?php
declare(strict_types=1); 
namespace App\Controller\Admin;
use Cake\Datasource\ConnectionManager;
use Cake\Core\Configure;
use Cake\Http\Exception\ForbiddenException;
use Cake\Http\Exception\NotFoundException;
use Cake\Http\Response;
use Cake\View\Exception\MissingTemplateException;
use TimeConversion;


class PressReleasesController extends AppController
{
    
	public function index(){
		$this->viewBuilder()->setLayout('layout');
		$pressReleases = $this->PressReleases->find('all')->where(['PressReleases.is_active'=>1])->toArray();
		$this->set(compact('pressReleases'));   
	}  
	
	public function add()
	{
		$this->viewBuilder()->setLayout('layout');
		$pressReleases= $this->PressReleases->newEmptyEntity();
		if ($this->request->is('post')) { //echo "<pre>"; print_r($this->request->getData());  exit();
			//$States= $this->LoanTypes->patchEntity($States, $this->request->getData());
			//$timedate = TimeConversion::ConvertServerTimezoneToLocalTimezone(date("Y-m-d H:i:s"),'Asia/Calcutta');
			$pressReleases->release_date          = date('Y-m-d',strtotime($this->request->getData('release_date')));
			$pressReleases->title                 = $this->request->getData('title');
			$pressReleases->description           = $this->request->getData('description');
			$pressReleases->url                   = $this->request->getData('url');
			//$pressReleases->submit_date           = date('Y-m-d',strtotime($timedate));
			$pressReleases->submit_date           = date('Y-m-d H:i:s');
			$pressReleases->created_by            = $this->Auth->User('id');
			//$pressReleases->created_on            = $timedate;
			$pressReleases->created_on            = date('Y-m-d H:i:s');

			//$States->description         = $this->request->getData('description');
			if ($this->PressReleases->save($pressReleases)) {
				$this->Flash->success(__('The PressReleases details has been saved.'));
				return $this->redirect(['action' => 'index']);
			}
			$this->Flash->error(__('The PressReleases details could not be saved. Please, try again.'));
		}
			$this->set(compact('pressReleases'));
	}
	
	public function edit($id = null)
	{
		$this->viewBuilder()->setLayout('layout');

		$pressReleases= $this->PressReleases->get($id, [
			'contain' => [],
		]);

		// echo '<pre>';
		// print_r($pressReleases);
		// exit();
		if ($this->request->is(['patch', 'post', 'put'])) {
			//$timedate = TimeConversion::ConvertServerTimezoneToLocalTimezone(date("Y-m-d H:i:s"),'Asia/Calcutta');
			$pressReleases= $this->PressReleases->patchEntity($pressReleases, $this->request->getData());
			$pressReleases->release_date         = date('Y-m-d',strtotime($this->request->getData('release_date')));
			$pressReleases->title                = $this->request->getData('title');
			$pressReleases->description          = $this->request->getData('description');
			$pressReleases->url                  = $this->request->getData('url');
			//$pressReleases->submit_date          = date('Y-m-d',strtotime($timedate));
			$pressReleases->submit_date           = date('Y-m-d H:i:s');
            $pressReleases->modified_by          = $this->Auth->User('id');
			//$pressReleases->modified_on          = $timedate;
			$pressReleases->created_on            = date('Y-m-d H:i:s');

			if ($this->PressReleases->save($pressReleases)) {
				$this->Flash->success(__('The PressReleases details has been updated.'));

				return $this->redirect(['action' => 'index']);
			}
			$this->Flash->error(__('The PressReleases details could not be updated. Please, try again.'));
		}		
		$this->set(compact('pressReleases'));
	}
	
	public function delete($id = null)
    {
		// echo '<pre>';
		// print_r($id);
		// exit();
		$this->request->is(['patch', 'post', 'delete']);
		$Project2Table           = $this->getTableLocator()->get('PressReleases');
		$project2                = $Project2Table->get($id); 
		$project2->is_active        = 0;
		$project2->modified_date = date('Y-m-d H:i:s');  
		// echo '<pre>';
		// print_r($project2);
		// exit();
	    if ($this->PressReleases->save($project2)) {
            $this->Flash->success(__('The PressReleases has been deleted.'));
        } else {
            $this->Flash->error(__('The PressReleases could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
	
	
}
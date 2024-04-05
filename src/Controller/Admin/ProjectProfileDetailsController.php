<?php
declare(strict_types=1); 
namespace App\Controller\Admin;
use Cake\Datasource\ConnectionManager;

use Cake\Core\Configure;
use Cake\Http\Exception\ForbiddenException;
use Cake\Http\Exception\NotFoundException;
use Cake\Http\Response;
use Cake\View\Exception\MissingTemplateException;

class ProjectProfileDetailsController extends AppController
{    
	public function index(){
		//echo "hi"; exit();
		$this->viewBuilder()->setLayout('layout');
		$this->loadModel('ProjectProfiles');
		
		if ($this->request->is(['patch', 'post', 'put'])) { 
		  $project_profile_id= $this->request->getData('project_profile_id');	
		  $projectDetails = $this->ProjectProfileDetails->find('all')->contain(['ProjectProfiles','ProjectProfileValues'])->where(['ProjectProfileDetails.project_profile_id'=>$project_profile_id])->toArray();
		}else{
		  $projectDetails = $this->ProjectProfileDetails->find('all')->contain(['ProjectProfiles','ProjectProfileValues'])->toArray();
		}		
		$project_profiles        = $this->ProjectProfiles->find('list',['keyField' => 'id',  'valueField' => 'name'])->all();
		
		$this->set(compact('projectDetails','project_profiles'));   
	}	  
	
	public function add()
	{
		$this->viewBuilder()->setLayout('layout');
		$this->loadModel('ProjectProfiles');
		$this->loadModel('ProjectProfileValues');

		$projectProfileDetails = $this->ProjectProfileDetails->newEmptyEntity();
		if ($this->request->is('post')) { 
		       $project_profile = $this->request->getData('file_upload');

            if ($project_profile->getClientFilename() != '' && $project_profile->getError() == 0) {
                $auth_id                                        = $this->Auth->user('id');
                $file1                                          =  $project_profile->getClientFilename();
				$file                                           = preg_replace('/\s+/', '_', $file1);
                $array                                          =  explode('.', $file);
                $fileName                                       = 'file';
                $fileExt                                        = $array[count($array) - 1];
                $newfile                                        = $file . "_". date('YmdHis') . "." . $fileExt;
                $tempFile                                       =  $project_profile->getStream()->getMetadata('uri');
                $targetPath                                     =  'uploads/project_profiles/';
                $targetFile                                     =  $targetPath . $newfile;
                move_uploaded_file($tempFile, $targetFile);
                $projectProfileDetails->file_upload             = $targetFile;
            } else {
                $projectProfileDetails->file_upload             = NULL;
            } 	
		
			$projectProfileDetails->project_profile_id        = $this->request->getData('project_profile_id');
			$projectProfileDetails->project_profile_value_id  = $this->request->getData('project_profile_value_id');
			$projectProfileDetails->project_name              = $this->request->getData('project_name');
			$projectProfileDetails->project_cost              = $this->request->getData('project_cost');

			$projectProfileDetails_check  = $this->ProjectProfileDetails->find('all')->where(['ProjectProfileDetails.project_name'=>$projectProfileDetails->project_name ,'ProjectProfileDetails.project_profile_id'=>$projectProfileDetails->project_profile_id,
			'ProjectProfileDetails.project_profile_value_id'=>$projectProfileDetails->project_profile_value_id,'ProjectProfileDetails.project_cost'=>$projectProfileDetails->project_cost])->count();


			if($projectProfileDetails_check>0){
				$this->Flash->error(__('The Project profile details already present. Please, try again.'));
				return $this->redirect(['action' => 'index']);

		}else{
			$this->ProjectProfileDetails->save($projectProfileDetails);
			$this->Flash->success(__('The Project profile details has been saved.'));
			return $this->redirect(['action' => 'index']);
		}
			// if ($this->ProjectProfileDetails->save($projectProfileDetails)) {
			// 	$this->Flash->success(__('The Project ProfileDetails has been saved.'));
			// 	return $this->redirect(['action' => 'index']);
			// }
			// $this->Flash->error(__('The Project ProfileDetails could not be saved. Please, try again.'));
		}
		$projectDetails        = $this->ProjectProfiles->find('list',['keyField' => 'id',  'valueField' => 'name'])->all();
		$project_profile_value = $this->ProjectProfileValues->find('list')->all();
		$this->set(compact('scheme','projectProfileDetails','projectDetails','project_profile_value'));
	}
	
	public function edit($id = null)
	{
		$this->viewBuilder()->setLayout('layout');
		$this->loadModel('ProjectProfiles');
		$this->loadModel('ProjectProfileValues');
		$projectProfileDetails = $this->ProjectProfileDetails->get($id, [
			'contain' => [],
		]);
		if ($this->request->is(['patch', 'post', 'put'])) { 
              //  echo "<pre>";  print_r($this->request->getData());  exit();
			  $project_profile = $this->request->getData('file_upload');			 
			 if ($project_profile->getClientFilename() != '' && $project_profile->getError() == 0) {
               // $auth_id                                      = $this->Auth->user('id');
                $file1                                          = $project_profile->getClientFilename();					
				$file                                           = preg_replace('/\s+/', '_', $file1);
				$file_og                                        = str_replace('.', '_', $file);
				$final_file1                                    = str_replace('-', '_', $file_og);
				$final_file                                     = substr($final_file1, 0, -4);;
				$fileExt                                        = 'pdf';              
                $newfile                                        = $final_file . "." . $fileExt;
                $tempFile                                       = $project_profile->getStream()->getMetadata('uri');
                $targetPath                                     = 'uploads/project_profiles/';
                $targetFile                                     =  $targetPath.$newfile;			
                move_uploaded_file($tempFile, $targetFile);
                $projectProfileDetails->file_upload             = $newfile;
				//echo "<pre>";  print_r($newfile);  exit();
            }  	
			// print_r($newfile);
			// exit();
			$projectProfileDetails->project_profile_id          = $this->request->getData('project_profile_id');
			$projectProfileDetails->project_profile_value_id	= $this->request->getData('project_profile_value_id');
			$projectProfileDetails->project_name                = $this->request->getData('project_name');
			$projectProfileDetails->project_cost                = $this->request->getData('project_cost');	

			$projectProfileDetails_check  = $this->ProjectProfileDetails->find('all')->where(['ProjectProfileDetails.project_name'=>$projectProfileDetails->project_name ,'ProjectProfileDetails.project_profile_id'=>$projectProfileDetails->project_profile_id,
			'ProjectProfileDetails.project_profile_value_id'=>$projectProfileDetails->project_profile_value_id,'ProjectProfileDetails.project_cost'=>$projectProfileDetails->project_cost,
			'ProjectProfileDetails.id='=>$id])->count();


			if($projectProfileDetails_check>0){
				$this->Flash->error(__('The Project profile details already present. Please, try again.'));
				return $this->redirect(['action' => 'index']);

		}else{
			$this->ProjectProfileDetails->save($projectProfileDetails);
			$this->Flash->success(__('The Project profile details has been saved.'));
			return $this->redirect(['action' => 'index']);
		}		
			// if ($this->ProjectProfileDetails->save($projectProfileDetails)) {
			// 	$this->Flash->success(__('The Project ProfileDetails has been updated.'));

			// 	return $this->redirect(['action' => 'index']);
			// }
			// $this->Flash->error(__('The Project ProfileDetails could not be updated. Please, try again.'));
		}	
		$projectDetails = $this->ProjectProfiles->find('list',['keyField' => 'id',  'valueField' => 'name'])->all();
		$project_profile_value = $this->ProjectProfileValues->find('list')->all();
		$this->set(compact('scheme','projectProfileDetails','projectDetails','project_profile_value'));
	}	
}
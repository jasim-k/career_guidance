<?php
App::uses('AppController', 'Controller');
/**
 * CourseByCas Controller
 *
 * @property CourseByCa $CourseByCa
 * @property PaginatorComponent $Paginator
 */
class CourseByCasController extends AppController {
public $uses=array('CertAuthority','Stream','Mode','CourseByCa','Course');

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
       $courseByCas=$this->CourseByCa->find('all',array(
			'joins'=>array(
				array(
					'table'=>'cert_authorities',
					'alias'=>'Cert_authority',
					'type'=>'INNER',
					'conditions'=>array('CourseByCa.ca_code=Cert_authority.id')
				),
				array(

				'table'=>'streams',
				'alias'=>'Stream',
				'type'=>'INNER',
				'conditions'=>array('CourseByCa.stream=Stream.id')
					
					),
				array(

				'table'=>'modes',
				'alias'=>'Mode',
				'type'=>'INNER',
				'conditions'=>array('CourseByCa.mode_study=Mode.id')
					
					),
				array(

				'table'=>'courses',
				'alias'=>'Course',
				'type'=>'INNER',
				'conditions'=>array('CourseByCa.course_code=Course.id')
					
					)
				),

			'fields'=>array('CourseByCa.*','Cert_authority.ca_code','Stream.stream','Mode.mode_study','Course.course_code')
			));
			// pr($courses); exit;
			$this->set('courseByCas',$courseByCas);
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->CourseByCa->exists($id)) {
			throw new NotFoundException(__('Invalid course by ca'));
		}
		$options = array('conditions' => array('CourseByCa.' . $this->CourseByCa->primaryKey => $id));
		$this->set('courseByCa', $this->CourseByCa->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$data=array(
					'course_code'=>$this->request->data['CourseByCa']['course_code'],
					'stream'=>$this->request->data['CourseByCa']['stream'],
					'mode_study'=>$this->request->data['CourseByCa']['mode_study'],
					'co_code'=>$this->request->data['CourseByCa']['co_code'],
					'specialisation'=>$this->request->data['CourseByCa']['specialisation'],
					'ca_code'=>$this->request->data['CourseByCa']['ca_code'],
					'date'=>date('Y-m-d')
					);
			$this->CourseByCa->create();
			if ($this->CourseByCa->save($data)) {
				$this->Session->setFlash(__('The Course By Ca has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Course By Ca could not be saved. Please, try again.'));
			}
		}
		// $brgjds=$this->Course->find('all'); exit;


		$course_codes=$this->Course->find('list',array('fields'=>array('id','course_code')));
		$this->set('course_codes',$course_codes);
 
		$streams=$this->Stream->find('list',array('fields'=>array('id','stream')));
		$this->set('streams',$streams);

		$mode_studies=$this->Mode->find('list',array('fields'=>array('id','mode_study')));
		$this->set('mode_studies',$mode_studies);

		$ca_codes=$this->CertAuthority->find('list',array('fields'=>array('id','ca_code')));
		$this->set('ca_codes',$ca_codes);
	}
/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->CourseByCa->exists($id)) {
			throw new NotFoundException(__('Invalid CourseByCa'));
		}
		if ($this->request->is(array('post', 'put'))) {
			$data=array(
				    'course_code'=>"'".$this->request->data['CourseByCa']['course_code']."'",
					'stream'=>"'".$this->request->data['CourseByCa']['stream']."'",
					'mode_study'=>"'".$this->request->data['CourseByCa']['mode_study']."'",
					'co_code'=>"'".$this->request->data['CourseByCa']['co_code']."'",
					'specialisation'=>"'".$this->request->data['CourseByCa']['specialisation']."'",
					'ca_code'=>"'".$this->request->data['CourseByCa']['ca_code']."'",
					'date'=>"'".date('Y-m-d')."'"
					);
			$cond=array('id'=>$id);
			if ($this->CourseByCa->updateAll($data,$cond)) {
				$this->Session->setFlash(__('The Course By Ca has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Course By Ca could not be saved. Please, try again.'));
			}
		} else {
			$courseByCas=$this->CourseByCa->find('all',array(
				'conditions'=>array('CourseByCa.id'=>$id),
			'joins'=>array(
				array(
					'table'=>'cert_authorities',
					'alias'=>'Cert_authority',
					'type'=>'INNER',
					'conditions'=>array('CourseByCa.ca_code=Cert_authority.id')
				),
				array(

				'table'=>'streams',
				'alias'=>'Stream',
				'type'=>'INNER',
				'conditions'=>array('CourseByCa.stream=Stream.id')
					
					),
				array(

				'table'=>'modes',
				'alias'=>'Mode',
				'type'=>'INNER',
				'conditions'=>array('CourseByCa.mode_study=Mode.id')
					
					),
				array(

				'table'=>'courses',
				'alias'=>'Course',
				'type'=>'INNER',
				'conditions'=>array('CourseByCa.course_code=Course.id')
					
					)
				),

			'fields'=>array('CourseByCa.*','Cert_authority.*','Stream.*','Mode.*','Course.*')
			));
			$options = array('conditions' => array('CourseByCa.' . $this->CourseByCa->primaryKey => $id));
			$this->request->data = $this->CourseByCa->find('first', $options);
			$course_codes=$this->Course->find('list',array('fields'=>array('id','course_code')));
		    $this->set('course_codes',$course_codes);
 
		    $streams=$this->Stream->find('list',array('fields'=>array('id','stream')));
		    $this->set('streams',$streams);

		    $mode_studies=$this->Mode->find('list',array('fields'=>array('id','mode_study')));
		    $this->set('mode_studies',$mode_studies);

		    $ca_codes=$this->CertAuthority->find('list',array('fields'=>array('id','ca_code')));
		    $this->set('ca_codes',$ca_codes);
			
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->CourseByCa->id = $id;
		if (!$this->CourseByCa->exists()) {
			throw new NotFoundException(__('Invalid course by ca'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->CourseByCa->delete()) {
			$this->Session->setFlash(__('The course by ca has been deleted.'));
		} else {
			$this->Session->setFlash(__('The course by ca could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}

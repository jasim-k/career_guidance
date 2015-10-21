<?php
App::uses('AppController', 'Controller');
/**
 * CourseEligibilities Controller
 *
 * @property CourseEligibility $CourseEligibility
 * @property PaginatorComponent $Paginator
 */
class CourseEligibilitiesController extends AppController {
public $uses=array('CourseEligibility','Eligibility','CourseByCa');

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
		$courseEligibilities=$this->CourseEligibility->find('all',array(
			'joins'=>array(
				array(
					'table'=>'eligibilities',
					'alias'=>'Eligibility',
					'type'=>'INNER',
					'conditions'=>array('CourseEligibility.eligibility=Eligibility.id')
				),
				array(

				'table'=>'course_by_cas',
				'alias'=>'Course_by_ca',
				'type'=>'INNER',
				'conditions'=>array('CourseEligibility.co_code=Course_by_ca.id')
					
					)
				),

			'fields'=>array('CourseEligibility.*','Eligibility.eligibility','Course_by_ca.co_code')
			));
			// pr($courses); exit;
			$this->set('courseEligibilities',$courseEligibilities);
	}


/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->CourseEligibility->exists($id)) {
			throw new NotFoundException(__('Invalid course eligibility'));
		}
		$options = array('conditions' => array('CourseEligibility.' . $this->CourseEligibility->primaryKey => $id));
		$this->set('courseEligibility', $this->CourseEligibility->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$data=array(
					'eligibility'=>$this->request->data['CourseEligibility']['eligibility'],
					'set_no'=>$this->request->data['CourseEligibility']['set_no'],
					'co_code'=>$this->request->data['CourseEligibility']['co_code'],
				
					'date'=>date('Y-m-d')
					);
			$this->CourseEligibility->create();
			if ($this->CourseEligibility->save($data)) {
				$this->Session->setFlash(__('The Course Eligibility has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Course Eligibility could not be saved. Please, try again.'));
			}
		}
		// $brgjds=$this->Course->find('all'); exit;
        $eligibilities=$this->Eligibility->find('list',array('fields'=>array('id','eligibility')));
		$this->set('eligibilities',$eligibilities);
        
		$co_codes=$this->CourseByCa->find('list',array('fields'=>array('id','co_code')));
		$this->set('co_codes',$co_codes);
 
		
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->CourseEligibility->exists($id)) {
			throw new NotFoundException(__('Invalid Course Eligibility'));
		}
		if ($this->request->is(array('post', 'put'))) {
			// pr($this); exit;
			$data=array(
				    'eligibility'=>"'".$this->request->data['CourseEligibility']['eligibility']."'",
					'set_no'=>$this->request->data['CourseEligibility']['set_no'],
					'co_code'=>"'".$this->request->data['CourseEligibility']['co_code']."'",
					
					'date'=>"'".date('Y-m-d')."'"
					);
			$cond=array('id'=>$id);
			if ($this->CourseEligibility->updateAll($data,$cond)) {
				$this->Session->setFlash(__('The Course Eligibility has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Course Eligibility could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('CourseEligibility.' . $this->CourseEligibility->primaryKey => $id));
			$this->request->data = $this->CourseEligibility->find('first', $options);

			$eligibilities=$this->Eligibility->find('list',array('fields'=>array('id','eligibility')));
		    $this->set('eligibilities',$eligibilities);
        
		    $co_codes=$this->CourseByCa->find('list',array('fields'=>array('id','co_code')));
		    $this->set('co_codes',$co_codes);
 
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
		$this->CourseEligibility->id = $id;
		if (!$this->CourseEligibility->exists()) {
			throw new NotFoundException(__('Invalid course eligibility'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->CourseEligibility->delete()) {
			$this->Session->setFlash(__('The course eligibility has been deleted.'));
		} else {
			$this->Session->setFlash(__('The course eligibility could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}

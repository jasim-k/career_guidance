<?php
App::uses('AppController', 'Controller');
/**
 * CourseEligibilityTests Controller
 *
 * @property CourseEligibilityTest $CourseEligibilityTest
 * @property PaginatorComponent $Paginator
 */
class CourseEligibilityTestsController extends AppController {
	public $uses=array('CourseEligibilityTest','EligibilityTest','CourseByCa');

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
		
	$courseEligibilityTests=$this->CourseEligibilityTest->find('all',array(
			'joins'=>array(
				array(
					'table'=>'eligibility_tests',
				    'alias'=>'Eligibility_test',
				    'type'=>'INNER',
				    'conditions'=>array('CourseEligibilityTest.eligibility_test=Eligibility_test.id')
				),
				array(

				'table'=>'course_by_cas',
				'alias'=>'Course_by_ca',
				'type'=>'INNER',
				'conditions'=>array('CourseEligibilityTest.co_code=Course_by_ca.id')
					
					)
				),

			'fields'=>array('CourseEligibilityTest.*','Eligibility_test.eligibility_test','Course_by_ca.co_code')
			));
			// pr($courses); exit;
			$this->set('courseEligibilityTests',$courseEligibilityTests);
	}
/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->CourseEligibilityTest->exists($id)) {
			throw new NotFoundException(__('Invalid course eligibility test'));
		}
		$options = array('conditions' => array('CourseEligibilityTest.' . $this->CourseEligibilityTest->primaryKey => $id));
		$this->set('courseEligibilityTest', $this->CourseEligibilityTest->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$data=array(
					'eligibility_test'=>$this->request->data['CourseEligibilityTest']['eligibility_test'],
					'co_code'=>$this->request->data['CourseEligibilityTest']['co_code'],
				
					'date'=>date('Y-m-d')
					);
			$this->CourseEligibilityTest->create();
			if ($this->CourseEligibilityTest->save($data)) {
				$this->Session->setFlash(__('The Course Eligibility Test has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Course EligibilityT est could not be saved. Please, try again.'));
			}
		}
		// $brgjds=$this->Course->find('all'); exit;
		
		$eligibility_tests=$this->EligibilityTest->find('list',array('fields'=>array('id','eligibility_test')));
		// echo "asdasd"; exit;
		$this->set('eligibility_tests',$eligibility_tests);

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
		if (!$this->CourseEligibilityTest->exists($id)) {
			throw new NotFoundException(__('Invalid Course Eligibility Test'));
		}
		if ($this->request->is(array('post', 'put'))) {
			$data=array(
				    'eligibility_test'=>"'".$this->request->data['CourseEligibilityTest']['eligibility_test']."'",
					'co_code'=>"'".$this->request->data['CourseEligibilityTest']['co_code']."'",
				
					'date'=>"'".date('Y-m-d')."'"
					);
			$cond=array('id'=>$id);
			if ($this->CourseEligibilityTest->updateAll($data,$cond)) {
				$this->Session->setFlash(__('The Course Eligibility Test has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Course Eligibility Test could not be saved. Please, try again.'));
			}
		} else {
			$courseEligibilityTsts=$this->CourseEligibilityTest->find('all',array(
				'conditions'=>array('CourseEligibilityTest.id'=>$id),

			'joins'=>array(
				array(
					'table'=>'eligibility_tests',
				    'alias'=>'Eligibility_test',
				    'type'=>'INNER',
				    'conditions'=>array('CourseEligibilityTest.eligibility_test=Eligibility_test.id')
				),
				array(

				'table'=>'course_by_cas',
				'alias'=>'Course_by_ca',
				'type'=>'INNER',
				'conditions'=>array('CourseEligibilityTest.co_code=Course_by_ca.id')
					
					)
				),

			'fields'=>array('CourseEligibilityTest.*','Eligibility_test.*','Course_by_ca.*')
			));
			// pr($courses); exit;
			$options = array('conditions' => array('CourseEligibilityTest.' . $this->CourseEligibilityTest->primaryKey => $id));
			$this->request->data = $this->CourseEligibilityTest->find('first', $options);
			$eligibility_tests=$this->EligibilityTest->find('list',array('fields'=>array('id','eligibility_test')));
		    $this->set('eligibility_tests',$eligibility_tests);

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
		$this->CourseEligibilityTest->id = $id;
		if (!$this->CourseEligibilityTest->exists()) {
			throw new NotFoundException(__('Invalid course eligibility test'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->CourseEligibilityTest->delete()) {
			$this->Session->setFlash(__('The course eligibility test has been deleted.'));
		} else {
			$this->Session->setFlash(__('The course eligibility test could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}

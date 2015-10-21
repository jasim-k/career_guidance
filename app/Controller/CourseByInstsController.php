<?php
App::uses('AppController', 'Controller');
/**
 * CourseByInsts Controller
 *
 * @property CourseByInst $CourseByInst
 * @property PaginatorComponent $Paginator
 */
class CourseByInstsController extends AppController {
public $uses=array('CourseByInst','Institution','CourseByCa');

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
       $courseByInsts=$this->CourseByInst->find('all',array(
			'joins'=>array(
				array(
					'table'=>'course_by_cas',
					'alias'=>'Course_by_ca',
					'type'=>'INNER',
					'conditions'=>array('CourseByInst.co_code=Course_by_ca.id')
				),
				array(

				'table'=>'institutions',
				'alias'=>'Institution',
				'type'=>'INNER',
				'conditions'=>array('CourseByInst.inst_code=Institution.id')
					
					)
				),

			'fields'=>array('CourseByInst.*','Course_by_ca.co_code','Institution.inst_code')
			));
			// pr($courses); exit;
			$this->set('courseByInsts',$courseByInsts);
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->CourseByInst->exists($id)) {
			throw new NotFoundException(__('Invalid course by inst'));
		}
		$options = array('conditions' => array('CourseByInst.' . $this->CourseByInst->primaryKey => $id));
		$this->set('courseByInst', $this->CourseByInst->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$data=array(
				    'inst_code'=>$this->request->data['Institution']['inst_code'],
				    'intake'=>$this->request->data['CourseByInst']['intake'],
					'co_code'=>$this->request->data['Course_by_ca']['co_code'],
					'date'=>date('Y-m-d')
					);
			$this->CourseByInst->create();
			if ($this->CourseByInst->save($data)) {
				$this->Session->setFlash(__('The Course By Inst has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Course By Inst could not be saved. Please, try again.'));
			}
		}
		// $brgjds=$this->Course->find('all'); exit;

        $inst_codes=$this->Institution->find('list',array('fields'=>array('id','inst_code')));
		// echo "asdasd"; exit;
		$this->set('inst_codes',$inst_codes);

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
		if (!$this->CourseByInst->exists($id)) {
			throw new NotFoundException(__('Invalid Course By Inst'));
		}
		if ($this->request->is(array('post', 'put'))) {
			$data=array(
				    'inst_code'=>"'".$this->request->data['CourseByInst']['inst_code']."'",
				    'intake'=>"'".$this->request->data['CourseByInst']['intake']."'",
					'co_code'=>"'".$this->request->data['CourseByInst']['co_code']."'",
					

					'date'=>"'".date('Y-m-d')."'"
					);
			$cond=array('id'=>$id);
			if ($this->CourseByInst->updateAll($data,$cond)) {
				$this->Session->setFlash(__('The Course By Inst has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Course By Inst could not be saved. Please, try again.'));
			}
		} else {
			$courseByIns=$this->CourseByInst->find('all',array(
				'conditions'=>array('CourseByInst.id'=>$id),
			'joins'=>array(
				array(
					'table'=>'course_by_cas',
					'alias'=>'Course_by_ca',
					'type'=>'INNER',
					'conditions'=>array('CourseByInst.co_code=Course_by_ca.id')
				),
				array(

				'table'=>'institutions',
				'alias'=>'Institution',
				'type'=>'INNER',
				'conditions'=>array('CourseByInst.inst_code=Institution.id')
					
					)
				),

			'fields'=>array('CourseByInst.*','Course_by_ca.*','Institution.*')
			));
			$options = array('conditions' => array('CourseByInst.' . $this->CourseByInst->primaryKey => $id));
			$this->request->data = $this->CourseByInst->find('first', $options);


			 $inst_codes=$this->Institution->find('list',array('fields'=>array('id','inst_code')));
		     $this->set('inst_codes',$inst_codes);

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
		$this->CourseByInst->id = $id;
		if (!$this->CourseByInst->exists()) {
			throw new NotFoundException(__('Invalid course by inst'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->CourseByInst->delete()) {
			$this->Session->setFlash(__('The course by inst has been deleted.'));
		} else {
			$this->Session->setFlash(__('The course by inst could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}

<?php
App::uses('AppController', 'Controller');
/**
 * CourseTypes Controller
 *
 * @property CourseType $CourseType
 * @property PaginatorComponent $Paginator
 */
class CourseTypesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	//public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		// $this->CourseType->recursive = 0;
		// $this->set('courseTypes', $this->Paginator->paginate());

		$course_types=$this->CourseType->find('all');
		$this->set('course_types',$course_types);
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->CourseType->exists($id)) {
			throw new NotFoundException(__('Invalid course type'));
		}
		$options = array('conditions' => array('CourseType.' . $this->CourseType->primaryKey => $id));
		$this->set('courseType', $this->CourseType->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		
		if ($this->request->is('post')) {
			$data=array(
					'course_type'=>$this->request->data['course_type'],
					'date'=>date('Y-m-d')
					);

			$this->CourseType->create();
			if ($this->CourseType->save($data)) {
				$this->Session->setFlash(__('The course type has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The course type could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */

	public function edit($id = null) {
		if (!$this->CourseType->exists($id)) {
			throw new NotFoundException(__('Invalid Course type'));
		}
		if ($this->request->is(array('post', 'put'))) {
			$data=array(
					'course_type'=>"'".$this->request->data['CourseType']['course_type']."'",
					'date'=>"'".date('Y-m-d')."'"
					);
			$cond=array('id'=>$id);
			if ($this->CourseType->updateAll($data,$cond)) {
				$this->Session->setFlash(__('The course type has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The course type could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('CourseType.' . $this->CourseType->primaryKey => $id));
			$this->request->data = $this->CourseType->find('first', $options);
		}
	}
	// public function edit($id = null) {
	// 	if (!$this->CourseType->exists($id)) {
	// 		throw new NotFoundException(__('Invalid course type'));
	// 	}
	// 	if ($this->request->is(array('post', 'put'))) {
	// 		if ($this->CourseType->save($this->request->data)) {
	// 			$this->Session->setFlash(__('The course type has been saved.'));
	// 			return $this->redirect(array('action' => 'index'));
	// 		} else {
	// 			$this->Session->setFlash(__('The course type could not be saved. Please, try again.'));
	// 		}
	// 	} else {
	// 		$options = array('conditions' => array('CourseType.' . $this->CourseType->primaryKey => $id));
	// 		$this->request->data = $this->CourseType->find('first', $options);
	// 	}
	// }

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->CourseType->id = $id;
		if (!$this->CourseType->exists()) {
			throw new NotFoundException(__('Invalid course type'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->CourseType->delete()) {
			$this->Session->setFlash(__('The course type has been deleted.'));
		} else {
			$this->Session->setFlash(__('The course type could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}

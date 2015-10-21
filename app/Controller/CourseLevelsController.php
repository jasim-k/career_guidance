<?php
App::uses('AppController', 'Controller');
/**
 * CourseLevels Controller
 *
 * @property CourseLevel $CourseLevel
 * @property PaginatorComponent $Paginator
 */
class CourseLevelsController extends AppController {

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
		// $this->CourseLevel->recursive = 0;
		// $this->set('courseLevels', $this->Paginator->paginate());

		$courseLevels=$this->CourseLevel->find('all');
		$this->set('course_levels',$courseLevels);
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->CourseLevel->exists($id)) {
			throw new NotFoundException(__('Invalid course level'));
		}
		$options = array('conditions' => array('CourseLevel.' . $this->CourseLevel->primaryKey => $id));
		$this->set('courseLevel', $this->CourseLevel->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		// if ($this->request->is('post')) {
		// 	$this->CourseLevel->create();
		// 	if ($this->CourseLevel->save($this->request->data)) {
		// 		$this->Session->setFlash(__('The course level has been saved.'));
		// 		return $this->redirect(array('action' => 'index'));
		// 	} else {
		// 		$this->Session->setFlash(__('The course level could not be saved. Please, try again.'));
		// 	}
		// }


		if ($this->request->is('post')) {
			$data=array(
					'course_level'=>$this->request->data['course_level'],
					'date'=>date('Y-m-d')
					);

			$this->CourseLevel->create();
			if ($this->CourseLevel->save($data)) {
				$this->Session->setFlash(__('The course level has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The course level could not be saved. Please, try again.'));
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
		if (!$this->CourseLevel->exists($id)) {
			throw new NotFoundException(__('Invalid course level'));
		}
		if ($this->request->is(array('post', 'put'))) {
			$data=array(
					'course_level'=>"'".$this->request->data['CourseLevel']['course_level']."'",
					'date'=>"'".date('Y-m-d')."'"
					);
			$cond=array('id'=>$id);
			if ($this->CourseLevel->updateAll($data,$cond)) {
				$this->Session->setFlash(__('The course level has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The course level could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('CourseLevel.' . $this->CourseLevel->primaryKey => $id));
			$this->request->data = $this->CourseLevel->find('first', $options);
		}
	}


	// public function edit($id = null) {
	// 	if (!$this->CourseLevel->exists($id)) {
	// 		throw new NotFoundException(__('Invalid course level'));
	// 	}
	// 	if ($this->request->is(array('post', 'put'))) {
	// 		if ($this->CourseLevel->save($this->request->data)) {
	// 			$this->Session->setFlash(__('The course level has been saved.'));
	// 			return $this->redirect(array('action' => 'index'));
	// 		} else {
	// 			$this->Session->setFlash(__('The course level could not be saved. Please, try again.'));
	// 		}
	// 	} else {
	// 		$options = array('conditions' => array('CourseLevel.' . $this->CourseLevel->primaryKey => $id));
	// 		$this->request->data = $this->CourseLevel->find('first', $options);
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
		$this->CourseLevel->id = $id;
		if (!$this->CourseLevel->exists()) {
			throw new NotFoundException(__('Invalid course level'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->CourseLevel->delete()) {
			$this->Session->setFlash(__('The course level has been deleted.'));
		} else {
			$this->Session->setFlash(__('The course level could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}

<?php
App::uses('AppController', 'Controller');
/**
 * SubjectTwos Controller
 *
 * @property SubjectTwo $SubjectTwo
 * @property PaginatorComponent $Paginator
 */
class SubjectTwosController extends AppController {

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
		$subjecttwos=$this->SubjectTwo->find('all');
		$this->set('subjecttwos',$subjecttwos);
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->SubjectTwo->exists($id)) {
			throw new NotFoundException(__('Invalid subject two'));
		}
		$options = array('conditions' => array('SubjectTwo.' . $this->SubjectTwo->primaryKey => $id));
		$this->set('subjectTwo', $this->SubjectTwo->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$data=array(
					'subject_two'=>$this->request->data['SubjectTwo']['subject_two'],
					'date'=>date('Y-m-d')
					);

			$this->SubjectTwo->create();
			if ($this->SubjectTwo->save($data)) {
				$this->Session->setFlash(__('The subject two has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The subject two could not be saved. Please, try again.'));
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
		if (!$this->SubjectTwo->exists($id)) {
			throw new NotFoundException(__('Invalid subject two'));
		}
		if ($this->request->is(array('post', 'put'))) {
			$data=array(
					'subject_two'=>"'".$this->request->data['SubjectTwo']['subject_two']."'",
					'date'=>"'".date('Y-m-d')."'"
					);
			$cond=array('id'=>$id);
			if ($this->SubjectTwo->updateAll($data,$cond)) {
				$this->Session->setFlash(__('The subject two has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The subject two could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('SubjectTwo.' . $this->SubjectTwo->primaryKey => $id));
			$this->request->data = $this->SubjectTwo->find('first', $options);
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
		$this->SubjectTwo->id = $id;
		if (!$this->SubjectTwo->exists()) {
			throw new NotFoundException(__('Invalid subject two'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->SubjectTwo->delete()) {
			$this->Session->setFlash(__('The subject two has been deleted.'));
		} else {
			$this->Session->setFlash(__('The subject two could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}

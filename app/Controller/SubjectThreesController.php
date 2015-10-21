<?php
App::uses('AppController', 'Controller');
/**
 * SubjectThrees Controller
 *
 * @property SubjectThree $SubjectThree
 * @property PaginatorComponent $Paginator
 */
class SubjectThreesController extends AppController {

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
		$subjectthrees=$this->SubjectThree->find('all');
		$this->set('subjectthrees',$subjectthrees);
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->SubjectThree->exists($id)) {
			throw new NotFoundException(__('Invalid subject three'));
		}
		$options = array('conditions' => array('SubjectThree.' . $this->SubjectThree->primaryKey => $id));
		$this->set('subjectThree', $this->SubjectThree->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$data=array(
					'subject_three'=>$this->request->data['SubjectThree']['subject_three'],
					'date'=>date('Y-m-d')
					);

			$this->SubjectThree->create();
			if ($this->SubjectThree->save($data)) {
				$this->Session->setFlash(__('The subject three has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The subject three could not be saved. Please, try again.'));
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
		if (!$this->SubjectThree->exists($id)) {
			throw new NotFoundException(__('Invalid subject three'));
		}
		if ($this->request->is(array('post', 'put'))) {
			$data=array(
					'subject_three'=>"'".$this->request->data['SubjectThree']['subject_three']."'",
					'date'=>"'".date('Y-m-d')."'"
					);
			$cond=array('id'=>$id);
			if ($this->SubjectThree->updateAll($data,$cond)) {
				$this->Session->setFlash(__('The subject three has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The subject three could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('SubjectThree.' . $this->SubjectThree->primaryKey => $id));
			$this->request->data = $this->SubjectThree->find('first', $options);
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
		$this->SubjectThree->id = $id;
		if (!$this->SubjectThree->exists()) {
			throw new NotFoundException(__('Invalid subject three'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->SubjectThree->delete()) {
			$this->Session->setFlash(__('The subject three has been deleted.'));
		} else {
			$this->Session->setFlash(__('The subject three could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}

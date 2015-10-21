<?php
App::uses('AppController', 'Controller');
/**
 * SubjectOnes Controller
 *
 * @property SubjectOne $SubjectOne
 * @property PaginatorComponent $Paginator
 */
class SubjectOnesController extends AppController {

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
		
		$subjectones=$this->SubjectOne->find('all');
		$this->set('subjectones',$subjectones);
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->SubjectOne->exists($id)) {
			throw new NotFoundException(__('Invalid subject one'));
		}
		$options = array('conditions' => array('SubjectOne.' . $this->SubjectOne->primaryKey => $id));
		$this->set('subjectOne', $this->SubjectOne->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$data=array(
					'subject_one'=>$this->request->data['SubjectOne']['subject_one'],
					'date'=>date('Y-m-d')
					);

			$this->SubjectOne->create();
			if ($this->SubjectOne->save($data)) {
				$this->Session->setFlash(__('The subject one has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The subject one could not be saved. Please, try again.'));
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
		if (!$this->SubjectOne->exists($id)) {
			throw new NotFoundException(__('Invalid Subject One'));
		}
		if ($this->request->is(array('post', 'put'))) {
			$data=array(
					'subject_one'=>"'".$this->request->data['SubjectOne']['subject_one']."'",
					'date'=>"'".date('Y-m-d')."'"
					);
			$cond=array('id'=>$id);
			if ($this->SubjectOne->updateAll($data,$cond)) {
				$this->Session->setFlash(__('The mode has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The mode could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('SubjectOne.' . $this->SubjectOne->primaryKey => $id));
			$this->request->data = $this->SubjectOne->find('first', $options);
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
		$this->SubjectOne->id = $id;
		if (!$this->SubjectOne->exists()) {
			throw new NotFoundException(__('Invalid subject one'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->SubjectOne->delete()) {
			$this->Session->setFlash(__('The subject one has been deleted.'));
		} else {
			$this->Session->setFlash(__('The subject one could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}

<?php
App::uses('AppController', 'Controller');
/**
 * Streams Controller
 *
 * @property Stream $Stream
 * @property PaginatorComponent $Paginator
 */
class StreamsController extends AppController {

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
		// $this->Stream->recursive = 0;
		// $this->set('streams', $this->Paginator->paginate());


		$streams=$this->Stream->find('all');
		$this->set('streams',$streams);
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Stream->exists($id)) {
			throw new NotFoundException(__('Invalid stream'));
		}
		$options = array('conditions' => array('Stream.' . $this->Stream->primaryKey => $id));
		$this->set('stream', $this->Stream->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	// public function add() {
	// 	if ($this->request->is('post')) {
	// 		$this->Stream->create();
	// 		if ($this->Stream->save($this->request->data)) {
	// 			$this->Session->setFlash(__('The stream has been saved.'));
	// 			return $this->redirect(array('action' => 'index'));
	// 		} else {
	// 			$this->Session->setFlash(__('The stream could not be saved. Please, try again.'));
	// 		}
	// 	}
	// }
	public function add() {
		if ($this->request->is('post')) {
			$data=array(
					'stream'=>$this->request->data['Stream']['stream'],
					'date'=>date('Y-m-d')
					);

			$this->Stream->create();
			if ($this->Stream->save($data)) {
				$this->Session->setFlash(__('The Stream has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Stream could not be saved. Please, try again.'));
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
	// public function edit($id = null) {
	// 	if (!$this->Stream->exists($id)) {
	// 		throw new NotFoundException(__('Invalid stream'));
	// 	}
	// 	if ($this->request->is(array('post', 'put'))) {
	// 		if ($this->Stream->save($this->request->data)) {
	// 			$this->Session->setFlash(__('The stream has been saved.'));
	// 			return $this->redirect(array('action' => 'index'));
	// 		} else {
	// 			$this->Session->setFlash(__('The stream could not be saved. Please, try again.'));
	// 		}
	// 	} else {
	// 		$options = array('conditions' => array('Stream.' . $this->Stream->primaryKey => $id));
	// 		$this->request->data = $this->Stream->find('first', $options);
	// 	}
	// }

	public function edit($id = null) {
		if (!$this->Stream->exists($id)) {
			throw new NotFoundException(__('Invalid stream'));
		}
		if ($this->request->is(array('post', 'put'))) {
			$data=array(
					'stream'=>"'".$this->request->data['Stream']['stream']."'",
					'date'=>"'".date('Y-m-d')."'"
					);
			$cond=array('id'=>$id);
			if ($this->Stream->updateAll($data,$cond)) {
				$this->Session->setFlash(__('The stream has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The stream could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Stream.' . $this->Stream->primaryKey => $id));
			$this->request->data = $this->Stream->find('first', $options);
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
		$this->Stream->id = $id;
		if (!$this->Stream->exists()) {
			throw new NotFoundException(__('Invalid stream'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Stream->delete()) {
			$this->Session->setFlash(__('The stream has been deleted.'));
		} else {
			$this->Session->setFlash(__('The stream could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}

<?php
App::uses('AppController', 'Controller');
/**
 * Entrances Controller
 *
 * @property Entrance $Entrance
 * @property PaginatorComponent $Paginator
 */
class EntrancesController extends AppController {

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
		// $this->Entrance->recursive = 0;
		// $this->set('entrances', $this->Paginator->paginate());

		$entrances=$this->Entrance->find('all');
		$this->set('entrances',$entrances);
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Entrance->exists($id)) {
			throw new NotFoundException(__('Invalid entrance'));
		}
		$options = array('conditions' => array('Entrance.' . $this->Entrance->primaryKey => $id));
		$this->set('entrance', $this->Entrance->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	// public function add() {
	// 	if ($this->request->is('post')) {
	// 		$this->Entrance->create();
	// 		if ($this->Entrance->save($this->request->data)) {
	// 			$this->Session->setFlash(__('The entrance has been saved.'));
	// 			return $this->redirect(array('action' => 'index'));
	// 		} else {
	// 			$this->Session->setFlash(__('The entrance could not be saved. Please, try again.'));
	// 		}
	// 	}
	// }

	public function add() {
		if ($this->request->is('post')) {
			$data=array(
					'entrance'=>$this->request->data['entrance'],
					'date'=>date('Y-m-d')
					);

			$this->Entrance->create();
			if ($this->Entrance->save($data)) {
				$this->Session->setFlash(__('The entrance has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The entrance could not be saved. Please, try again.'));
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
	// 	if (!$this->Entrance->exists($id)) {
	// 		throw new NotFoundException(__('Invalid entrance'));
	// 	}
	// 	if ($this->request->is(array('post', 'put'))) {
	// 		if ($this->Entrance->save($this->request->data)) {
	// 			$this->Session->setFlash(__('The entrance has been saved.'));
	// 			return $this->redirect(array('action' => 'index'));
	// 		} else {
	// 			$this->Session->setFlash(__('The entrance could not be saved. Please, try again.'));
	// 		}
	// 	} else {
	// 		$options = array('conditions' => array('Entrance.' . $this->Entrance->primaryKey => $id));
	// 		$this->request->data = $this->Entrance->find('first', $options);
	// 	}
	// }

public function edit($id = null) {
		if (!$this->Entrance->exists($id)) {
			throw new NotFoundException(__('Invalid Entrance'));
		}
		if ($this->request->is(array('post', 'put'))) {
			$data=array(
					'entrance'=>"'".$this->request->data['Entrance']['entrance']."'",
					'date'=>"'".date('Y-m-d')."'"
					);
			$cond=array('id'=>$id);
			if ($this->Entrance->updateAll($data,$cond)) {
				$this->Session->setFlash(__('The Entrance has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Entrance could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Entrance.' . $this->Entrance->primaryKey => $id));
			$this->request->data = $this->Entrance->find('first', $options);
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
		$this->Entrance->id = $id;
		if (!$this->Entrance->exists()) {
			throw new NotFoundException(__('Invalid entrance'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Entrance->delete()) {
			$this->Session->setFlash(__('The entrance has been deleted.'));
		} else {
			$this->Session->setFlash(__('The entrance could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}

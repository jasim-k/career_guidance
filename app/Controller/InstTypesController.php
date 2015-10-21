<?php
App::uses('AppController', 'Controller');
/**
 * InstTypes Controller
 *
 * @property InstType $InstType
 * @property PaginatorComponent $Paginator
 */
class InstTypesController extends AppController {

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
		// $this->InstType->recursive = 0;
		// $this->set('instTypes', $this->Paginator->paginate());
	
		$inst_type=$this->InstType->find('all');
		$this->set('inst_types',$inst_type);

		}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	// public function view($id = null) {
	// 	if (!$this->InstType->exists($id)) {
	// 		throw new NotFoundException(__('Invalid inst type'));
	// 	}
	// 	$options = array('conditions' => array('InstType.' . $this->InstType->primaryKey => $id));
	// 	$this->set('instType', $this->InstType->find('first', $options));
	// }

/**
 * add method
 *
 * @return void
 */
	// public function add() {
	// 	if ($this->request->is('post')) {
	// 		$this->InstType->create();
	// 		if ($this->InstType->save($this->request->data)) {
	// 			$this->Session->setFlash(__('The inst type has been saved.'));
	// 			return $this->redirect(array('action' => 'index'));
	// 		} else {
	// 			$this->Session->setFlash(__('The inst type could not be saved. Please, try again.'));
	// 		}
	// 	}
	// }
	public function add() {
		if ($this->request->is('post')) {
			$data=array(
					'inst_type'=>$this->request->data['inst_type'],
					'date'=>date('Y-m-d')
					);

			$this->InstType->create();
			if ($this->InstType->save($data)) {
				$this->Session->setFlash(__('The inst type has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The inst type could not be saved. Please, try again.'));
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
	// 	if (!$this->InstType->exists($id)) {
	// 		throw new NotFoundException(__('Invalid inst type'));
	// 	}
	// 	if ($this->request->is(array('post', 'put'))) {
	// 		if ($this->InstType->save($this->request->data)) {
	// 			$this->Session->setFlash(__('The inst type has been saved.'));
	// 			return $this->redirect(array('action' => 'index'));
	// 		} else {
	// 			$this->Session->setFlash(__('The inst type could not be saved. Please, try again.'));
	// 		}
	// 	} else {
	// 		$options = array('conditions' => array('InstType.' . $this->InstType->primaryKey => $id));
	// 		$this->request->data = $this->InstType->find('first', $options);
	// 	}
	// }
public function edit($id = null) {
		if (!$this->InstType->exists($id)) {
			throw new NotFoundException(__('Invalid inst type'));
		}
		if ($this->request->is(array('post', 'put'))) {
			$data=array(
					'inst_type'=>"'".$this->request->data['InstType']['inst_type']."'",
					'date'=>"'".date('Y-m-d')."'"
					);
			$cond=array('id'=>$id);
			if ($this->InstType->updateAll($data,$cond)) {
				$this->Session->setFlash(__('The inst type has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The inst type could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('InstType.' . $this->InstType->primaryKey => $id));
			$this->request->data = $this->InstType->find('first', $options);
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
		$this->InstType->id = $id;
		if (!$this->InstType->exists()) {
			throw new NotFoundException(__('Invalid inst type'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->InstType->delete()) {
			$this->Session->setFlash(__('The inst type has been deleted.'));
		} else {
			$this->Session->setFlash(__('The inst type could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}

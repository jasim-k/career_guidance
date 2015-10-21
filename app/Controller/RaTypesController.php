<?php
App::uses('AppController', 'Controller');
/**
 * RaTypes Controller
 *
 * @property RaType $RaType
 * @property PaginatorComponent $Paginator
 */
class RaTypesController extends AppController {

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
		$raTypes=$this->RaType->find('all');
		$this->set('raTypes',$raTypes);
		
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->RaType->exists($id)) {
			throw new NotFoundException(__('Invalid ra type'));
		}
		$options = array('conditions' => array('RaType.' . $this->RaType->primaryKey => $id));
		$this->set('raType', $this->RaType->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$data=array(
					'ra_type'=>$this->request->data['RaType']['ra_type'],
					'date'=>date('Y-m-d')
					);

			$this->RaType->create();
			if ($this->RaType->save($data)) {
				$this->Session->setFlash(__('The Ranking Authority Type has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Ranking Authority Type could not be saved. Please, try again.'));
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
		if (!$this->RaType->exists($id)) {
			throw new NotFoundException(__('Invalid Ranking Authority Type'));
		}
		if ($this->request->is(array('post', 'put'))) {
			$data=array(
					'ra_type'=>"'".$this->request->data['RaType']['ra_type']."'",
					'date'=>"'".date('Y-m-d')."'"
					);
			$cond=array('id'=>$id);
			if ($this->RaType->updateAll($data,$cond)) {
				$this->Session->setFlash(__('The Ranking Authority Type has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Ranking Authority Type could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('RaType.' . $this->RaType->primaryKey => $id));
			$this->request->data = $this->RaType->find('first', $options);
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
		$this->RaType->id = $id;
		if (!$this->RaType->exists()) {
			throw new NotFoundException(__('Invalid ra type'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->RaType->delete()) {
			$this->Session->setFlash(__('The ra type has been deleted.'));
		} else {
			$this->Session->setFlash(__('The ra type could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}

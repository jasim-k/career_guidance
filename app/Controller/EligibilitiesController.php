<?php
App::uses('AppController', 'Controller');
/**
 * Eligibilities Controller
 *
 * @property Eligibility $Eligibility
 * @property PaginatorComponent $Paginator
 */
class EligibilitiesController extends AppController {

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
		// $this->Eligibility->recursive = 0;
		// $this->set('eligibilities', $this->Paginator->paginate());

		$eligibilities=$this->Eligibility->find('all');
		$this->set('eligibilities',$eligibilities);
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Eligibility->exists($id)) {
			throw new NotFoundException(__('Invalid eligibility'));
		}
		$options = array('conditions' => array('Eligibility.' . $this->Eligibility->primaryKey => $id));
		$this->set('eligibility', $this->Eligibility->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		// if ($this->request->is('post')) {
		// 	$this->Eligibility->create();
		// 	if ($this->Eligibility->save($this->request->data)) {
		// 		$this->Session->setFlash(__('The eligibility has been saved.'));
		// 		return $this->redirect(array('action' => 'index'));
		// 	} else {
		// 		$this->Session->setFlash(__('The eligibility could not be saved. Please, try again.'));
		// 	}
		// }


		if ($this->request->is('post')) {
			$data=array(
					'eligibility'=>$this->request->data['eligibility'],
					'date'=>date('Y-m-d')
					);

			$this->Eligibility->create();
			if ($this->Eligibility->save($data)) {
				$this->Session->setFlash(__('The eligibility has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The eligibility could not be saved. Please, try again.'));
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
	// 	if (!$this->Eligibility->exists($id)) {
	// 		throw new NotFoundException(__('Invalid eligibility'));
	// 	}
	// 	if ($this->request->is(array('post', 'put'))) {
	// 		if ($this->Eligibility->save($this->request->data)) {
	// 			$this->Session->setFlash(__('The eligibility has been saved.'));
	// 			return $this->redirect(array('action' => 'index'));
	// 		} else {
	// 			$this->Session->setFlash(__('The eligibility could not be saved. Please, try again.'));
	// 		}
	// 	} else {
	// 		$options = array('conditions' => array('Eligibility.' . $this->Eligibility->primaryKey => $id));
	// 		$this->request->data = $this->Eligibility->find('first', $options);
	// 	}
	// }

	public function edit($id = null) {
		if (!$this->Eligibility->exists($id)) {
			throw new NotFoundException(__('Invalid Eligibility'));
		}
		if ($this->request->is(array('post', 'put'))) {
			$data=array(
					'eligibility'=>"'".$this->request->data['Eligibility']['eligibility']."'",
					'date'=>"'".date('Y-m-d')."'"
					);
			$cond=array('id'=>$id);
			if ($this->Eligibility->updateAll($data,$cond)) {
				$this->Session->setFlash(__('The Eligibility has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Eligibility could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Eligibility.' . $this->Eligibility->primaryKey => $id));
			$this->request->data = $this->Eligibility->find('first', $options);
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
		$this->Eligibility->id = $id;
		if (!$this->Eligibility->exists()) {
			throw new NotFoundException(__('Invalid eligibility'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Eligibility->delete()) {
			$this->Session->setFlash(__('The eligibility has been deleted.'));
		} else {
			$this->Session->setFlash(__('The eligibility could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}

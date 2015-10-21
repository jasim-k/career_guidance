<?php
App::uses('AppController', 'Controller');
/**
 * EligibilityTests Controller
 *
 * @property EligibilityTest $EligibilityTest
 * @property PaginatorComponent $Paginator
 */
class EligibilityTestsController extends AppController {

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
		// $this->EligibilityTest->recursive = 0;
		// $this->set('eligibilityTests', $this->Paginator->paginate());

		$eligibility_tests=$this->EligibilityTest->find('all');
		$this->set('eligibility_tests',$eligibility_tests);
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->EligibilityTest->exists($id)) {
			throw new NotFoundException(__('Invalid eligibility test'));
		}
		$options = array('conditions' => array('EligibilityTest.' . $this->EligibilityTest->primaryKey => $id));
		$this->set('eligibilityTest', $this->EligibilityTest->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	// public function add() {
	// 	if ($this->request->is('post')) {
	// 		$this->EligibilityTest->create();
	// 		if ($this->EligibilityTest->save($this->request->data)) {
	// 			$this->Session->setFlash(__('The eligibility test has been saved.'));
	// 			return $this->redirect(array('action' => 'index'));
	// 		} else {
	// 			$this->Session->setFlash(__('The eligibility test could not be saved. Please, try again.'));
	// 		}
	// 	}
	// }


	public function add() {
		if ($this->request->is('post')) {
			$data=array(
					'eligibility_test'=>$this->request->data['eligibility_test'],
					'date'=>date('Y-m-d')
					);

			$this->EligibilityTest->create();
			if ($this->EligibilityTest->save($data)) {
				$this->Session->setFlash(__('The Eligibility test has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Eligibility test could not be saved. Please, try again.'));
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
	// 	if (!$this->EligibilityTest->exists($id)) {
	// 		throw new NotFoundException(__('Invalid eligibility test'));
	// 	}
	// 	if ($this->request->is(array('post', 'put'))) {
	// 		if ($this->EligibilityTest->save($this->request->data)) {
	// 			$this->Session->setFlash(__('The eligibility test has been saved.'));
	// 			return $this->redirect(array('action' => 'index'));
	// 		} else {
	// 			$this->Session->setFlash(__('The eligibility test could not be saved. Please, try again.'));
	// 		}
	// 	} else {
	// 		$options = array('conditions' => array('EligibilityTest.' . $this->EligibilityTest->primaryKey => $id));
	// 		$this->request->data = $this->EligibilityTest->find('first', $options);
	// 	}
	// }


	public function edit($id = null) {
		if (!$this->EligibilityTest->exists($id)) {
			throw new NotFoundException(__('Invalid Eligibility test'));
		}
		if ($this->request->is(array('post', 'put'))) {
			$data=array(
					'eligibility_test'=>"'".$this->request->data['EligibilityTest']['eligibility_test']."'",
					'date'=>"'".date('Y-m-d')."'"
					);
			$cond=array('id'=>$id);
			if ($this->EligibilityTest->updateAll($data,$cond)) {
				$this->Session->setFlash(__('The Eligibility test has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Eligibility test could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('EligibilityTest.' . $this->EligibilityTest->primaryKey => $id));
			$this->request->data = $this->EligibilityTest->find('first', $options);
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
		$this->EligibilityTest->id = $id;
		if (!$this->EligibilityTest->exists()) {
			throw new NotFoundException(__('Invalid eligibility test'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->EligibilityTest->delete()) {
			$this->Session->setFlash(__('The eligibility test has been deleted.'));
		} else {
			$this->Session->setFlash(__('The eligibility test could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}

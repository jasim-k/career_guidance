<?php
App::uses('AppController', 'Controller');
/**
 * Countries Controller
 *
 * @property Country $Country
 * @property PaginatorComponent $Paginator
 */
class CountriesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	// public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		// $this->Country->recursive = 0;
		// $this->set('countries', $this->Paginator->paginate());

		$countries=$this->Country->find('all');
		$this->set('countries',$countries);

		$s_id=9;
	  	$this->set('s_id',$s_id);
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Country->exists($id)) {
			throw new NotFoundException(__('Invalid country'));
		}
		$options = array('conditions' => array('Country.' . $this->Country->primaryKey => $id));
		$this->set('country', $this->Country->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	// public function add() {
	// 	if ($this->request->is('post')) {
	// 		$this->Country->create();
	// 		if ($this->Country->save($this->request->data)) {
	// 			$this->Session->setFlash(__('The country has been saved.'));
	// 			return $this->redirect(array('action' => 'index'));
	// 		} else {
	// 			$this->Session->setFlash(__('The country could not be saved. Please, try again.'));
	// 		}
	// 	}
	// }

	public function add() {
		if ($this->request->is('post')) {
			$data=array(
					'sortname'=>$this->request->data['sortname'],
					'name'=>$this->request->data['name'],
					);

			$this->Country->create();
			if ($this->Country->save($data)) {
				$this->Session->setFlash(__('The Country has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Country could not be saved. Please, try again.'));
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
	// 	if (!$this->Country->exists($id)) {
	// 		throw new NotFoundException(__('Invalid country'));
	// 	}
	// 	if ($this->request->is(array('post', 'put'))) {
	// 		if ($this->Country->save($this->request->data)) {
	// 			$this->Session->setFlash(__('The country has been saved.'));
	// 			return $this->redirect(array('action' => 'index'));
	// 		} else {
	// 			$this->Session->setFlash(__('The country could not be saved. Please, try again.'));
	// 		}
	// 	} else {
	// 		$options = array('conditions' => array('Country.' . $this->Country->primaryKey => $id));
	// 		$this->request->data = $this->Country->find('first', $options);
	// 	}
	// }


public function edit($id = null) {
		if (!$this->Country->exists($id)) {
			throw new NotFoundException(__('Invalid Country'));
		}
		if ($this->request->is(array('post', 'put'))) {
			$data=array(
					'sortname'=>"'".$this->request->data['Country']['sortname']."'",
					'name'=>"'".$this->request->data['Country']['name']."'",
					);
			$cond=array('id'=>$id);
			if ($this->Country->updateAll($data,$cond)) {
				$this->Session->setFlash(__('The Country has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Country could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Country.' . $this->Country->primaryKey => $id));
			$this->request->data = $this->Country->find('first', $options);
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
		$this->Country->id = $id;
		if (!$this->Country->exists()) {
			throw new NotFoundException(__('Invalid country'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Country->delete()) {
			$this->Session->setFlash(__('The country has been deleted.'));
		} else {
			$this->Session->setFlash(__('The country could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}


	public function search($query= null)
	{
		
  
	  	$query=	$this->request->data['Country']['Enter_Code'];
	  	$cq=$this->Country->query("SELECT * FROM Countries WHERE name LIKE '%".$query."%'");

	  	 // pr($cq); exit;
	  	$count=count($cq);
	  	$s_id=10;
	  	$this->set('s_id',$s_id);
	  	$this->set('count',$count);

		   $this->set('countries',$cq);
		 

		return $this->view="index";

	}
}

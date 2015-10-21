<?php
App::uses('AppController', 'Controller');
/**
 * States Controller
 *
 * @property State $State
 * @property PaginatorComponent $Paginator
 */
class StatesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');
	public $uses= array('State','Country');
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->State->recursive = 0;
		$this->set('states', $this->Paginator->paginate());

		// pr($this); exit;
		$s_id=9;
	  	$this->set('s_id',$s_id);

		// $states=$this->State->find('all');
		// $this->set('states',$states);
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->State->exists($id)) {
			throw new NotFoundException(__('Invalid state'));
		}
		$options = array('conditions' => array('State.' . $this->State->primaryKey => $id));
		$this->set('state', $this->State->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->State->create();
			if ($this->State->save($this->request->data)) {
				$this->Session->setFlash(__('The state has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The state could not be saved. Please, try again.'));
			}
		}
		$countries = $this->State->Country->find('list');
		$this->set(compact('countries'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->State->exists($id)) {
			throw new NotFoundException(__('Invalid state'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->State->save($this->request->data)) {
				$this->Session->setFlash(__('The state has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The state could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('State.' . $this->State->primaryKey => $id));
			$this->request->data = $this->State->find('first', $options);
		}
		$countries = $this->State->Country->find('list');
		$this->set(compact('countries'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->State->id = $id;
		if (!$this->State->exists()) {
			throw new NotFoundException(__('Invalid state'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->State->delete()) {
			$this->Session->setFlash(__('The state has been deleted.'));
		} else {
			$this->Session->setFlash(__('The state could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

	public function search($query= null)
	{
		// $states=$this->State->find('all', array('limit' => 30 ));
  
	  	$query=	$this->request->data['State']['Enter_Code'];
	 	
	 	 // $cn=$this->State->query("SELECT * FROM states WHERE name LIKE '%".$query."%'");
	  	$cq=$this->State->query("SELECT * FROM States INNER JOIN Countries ON states.country_id = countries.id WHERE states.name LIKE '%".$query."%'");

	  	 // pr($cq); exit;

	 	 // pr($cn); exit;
	 	// pr( end($cn));
	 	// $this->query("SELECT * FROM Location;");
	 	// echo $query; 
		// pr($states); exit;
		 // pr($cn); exit;
		// $this->State->recursive = 0;

		// $this->set('states1', $this->Paginator->paginate());

		 // $this->set('states',$cq);
	  	// pr($cq); 
	  	// pr(count($cq)); exit;
	  	$count=count($cq);
	  	$s_id=10;
	  	$this->set('s_id',$s_id);
	  	$this->set('count',$count);

		   $this->set($this->set('states',$cq),$this->Paginator->paginate());
		  // pr($name); exit;
		// return $this->render(array('action' => 'index'));	
		// return $this -> render('cg/index');

		return $this->view="index";

	}
}

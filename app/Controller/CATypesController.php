<?php
App::uses('AppController', 'Controller');
/**
 * CaTypes Controller
 *
 * @property CaType $CaType
 * @property PaginatorComponent $Paginator
 */
class CaTypesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	//public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		// $this->CaType->recursive = 0;
		// $this->set('caTypes', $this->Paginator->paginate());

		$ca_types=$this->CaType->find('all');
		$this->set('ca_types',$ca_types);
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->CaType->exists($id)) {
			throw new NotFoundException(__('Invalid ca type'));
		}
		$options = array('conditions' => array('CaType.' . $this->CaType->primaryKey => $id));
		$this->set('caType', $this->CaType->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		// pr($this);
		// $link=$this->request->params['pass'][0];
			 // echo $link;
		if ($this->request->is('post')) {

			// pr($data); exit;
			$data=array(
					'ca_type'=>$this->request->data['ca_type'],
					'date'=>date('Y-m-d')
					);

			$this->CaType->create();
			if ($this->CaType->save($data)) {
				$this->Session->setFlash(__('The ca type has been saved.'));
				// if($link == '2')
				// {
					 // echo "success" ; exit;
// 				return $this->redirect(array(
//     'controller' => 'CertAuthorities',
//     'action' => 'index', 
//     // $this->request->data
//     )
// );
// 				}
// 				elseif ($link == 1) {
// 					# code...
		
// 					// echo "faid" ; exit;
				return $this->redirect(array('action' => 'index'));
				// }
			} else {
				$this->Session->setFlash(__('The ca type could not be saved. Please, try again.'));
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
		 // echo $id ; exit;
		if (!$this->CaType->exists($id)) {
			throw new NotFoundException(__('Invalid ca type'));
		}
		if ($this->request->is(array('post', 'put'))) {
			$data=array(
					'ca_type'=>"'".$this->request->data['CaType']['ca_type']."'",
					'date'=>"'".date('Y-m-d')."'"
					);
			$cond=array('id'=>$id);
			if ($this->CaType->updateAll($data,$cond)) {
				$this->Session->setFlash(__('The ca type has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The ca type could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('CaType.' . $this->CaType->primaryKey => $id));
			$this->request->data = $this->CaType->find('first', $options);
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
		$this->CaType->id = $id;
		if (!$this->CaType->exists()) {
			throw new NotFoundException(__('Invalid ca type'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->CaType->delete()) {
			$this->Session->setFlash(__('The ca type has been deleted.'));
		} else {
			$this->Session->setFlash(__('The ca type could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}

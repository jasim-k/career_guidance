<?php
App::uses('AppController', 'Controller');
/**
 * Institutions Controller
 *
 * @property Institution $Institution
 * @property PaginatorComponent $Paginator
 */
class InstitutionsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	// public $components = array('Paginator');
		public $uses=array('InstType','Institution','City','Country','State');



/**
 * index method
 *
 * @return void
 */
	public function index() {
		// $this->Institution->recursive = 0;
		// $this->set('institutions', $this->Paginator->paginate());

		$institutions=$this->Institution->find('all',array(
			'joins'=>array(array(
				'table'=>'inst_types',
				'alias'=>'Inst_type',
				'type'=>'INNER',
				'conditions'=>array('Institution.inst_type=Inst_type.id')
				),
			array(
						'table'=>'cities',
						'alias'=>'City',
						'type'=>'INNER',
						'conditions'=>array('Institution.city=City.id')
			)),
			'fields'=>array('Institution.*','Inst_type.inst_type','City.name')

			));
		//pr($institutions); exit;
		$this->set('institutions',$institutions);
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Institution->exists($id)) {
			throw new NotFoundException(__('Invalid institution'));
		}
		$options = array('conditions' => array('Institution.' . $this->Institution->primaryKey => $id));
		$this->set('institution', $this->Institution->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		// if ($this->request->is('post')) {
		// 	$this->Institution->create();
		// 	if ($this->Institution->save($this->request->data)) {
		// 		$this->Session->setFlash(__('The institution has been saved.'));
		// 		return $this->redirect(array('action' => 'index'));
		// 	} else {
		// 		$this->Session->setFlash(__('The institution could not be saved. Please, try again.'));
		// 	}
		// }

		if ($this->request->is('post')) {
			$data=array(
					'name'=>$this->request->data['Institution']['name'],
					'inst_type'=>$this->request->data['Institution']['inst_type'],
					'city'=>$this->request->data['city'],
					'code'=>$this->request->data['Institution']['code'],
					'address'=>$this->request->data['Institution']['address'],
					'phone'=>$this->request->data['Institution']['phone'],
					'fax'=>$this->request->data['Institution']['fax'],
					'email'=>$this->request->data['Institution']['email'],
					'website'=>$this->request->data['Institution']['website'],

					'date'=>date('Y-m-d')
					);
			$this->Institution->create();
			// pr($data); exit;
			if ($this->Institution->save($data)) {
				$this->Session->setFlash(__('The institution has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The institution could not be saved. Please, try again.'));
			}
		}
		//$brgjds=$this->Institution->find('all');


		$inst_types=$this->InstType->find('list',array('fields'=>array('id','inst_type')));
		$this->set('inst_types',$inst_types);

	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	// public function edit($id = null) {
	// 	if (!$this->Institution->exists($id)) {
	// 		throw new NotFoundException(__('Invalid institution'));
	// 	}
	// 	if ($this->request->is(array('post', 'put'))) {
	// 		if ($this->Institution->save($this->request->data)) {
	// 			$this->Session->setFlash(__('The institution has been saved.'));
	// 			return $this->redirect(array('action' => 'index'));
	// 		} else {
	// 			$this->Session->setFlash(__('The institution could not be saved. Please, try again.'));
	// 		}
	// 	} else {
	// 		$options = array('conditions' => array('Institution.' . $this->Institution->primaryKey => $id));
	// 		$this->request->data = $this->Institution->find('first', $options);
	// 	}
	// }

	
	public function edit($id = null) {
		if (!$this->Institution->exists($id)) {
			throw new NotFoundException(__('Invalid Institution'));
		}
		if ($this->request->is(array('post', 'put'))) {
			// pr($this); 
					$data=array(
					'name'=>"'".$this->request->data['Institution']['name']."'",
					'inst_type'=>"'".$this->request->data['Inst_type']['inst_type']."'",
					'city'=>"'".$this->request->data['City']['City']."'",
					'code'=>"'".$this->request->data['Institution']['code']."'",
					'address'=>"'".$this->request->data['Institution']['address']."'",
					'phone'=>"'".$this->request->data['Institution']['phone']."'",
					'fax'=>"'".$this->request->data['Institution']['fax']."'",
					'email'=>"'".$this->request->data['Institution']['email']."'",
					'website'=>"'".$this->request->data['Institution']['website']."'",
					'date'=>"'".date('Y-m-d')."'"

					);
			$cond=array('id'=>$id);
			if ($this->Institution->updateAll($data,$cond)) {
				$this->Session->setFlash(__('The cert authority has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The cert authority could not be saved. Please, try again.'));
			}
		} else {

			$location=$this->Institution->find('all',array(
				'conditions'=>array('Institution.id'=>$id),
				'joins'=>array(
					array(
						'table'=>'cities',
						'alias'=>'City',
						'type'=>'INNER',
						'conditions'=>array('City.id=Institution.city')
					),
					array(
				 		'table'=>'states',
						'alias'=>'State',
						'type'=>'INNER',
						'conditions'=>array('State.id=City.state_id')
					),
					array(
				   		'table'=>'Countries',
						'alias'=>'Country',
						'type'=>'INNER',
						'conditions'=>array('Country.id=State.country_id')
					),
					array(
						'table'=>'inst_types',
						'alias'=>'Inst_type',
						'type'=>'INNER',
						'conditions'=>array('Inst_type.id=Institution.inst_type')
					)
				),
				'fields'=>array('City.id as  City','Country.id as Country','State.id as State','City.name as cityname','Institution.*','Inst_type.*')
				));

			$this->request->data=$location[0];
				//pr($this->request->data);die();
			$inst_types=$this->InstType->find('list',array('fields'=>array('id','inst_type')));
			$this->set('inst_types',$inst_types);
			$Countries=$this->Country->find('list',array('fields'=>array('id','name')));
			$this->set('countries',$Countries);
			$States=$this->State->find('list',array('fields'=>array('id','name')));
			$this->set('states',$States);
			$Cities=$this->City->find('list',array('fields'=>array('id','name')));
			$this->set('cities',$Cities);

			$this->set('location',$location[0]);
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
		$this->Institution->id = $id;
		if (!$this->Institution->exists()) {
			throw new NotFoundException(__('Invalid institution'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Institution->delete()) {
			$this->Session->setFlash(__('The institution has been deleted.'));
		} else {
			$this->Session->setFlash(__('The institution could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}

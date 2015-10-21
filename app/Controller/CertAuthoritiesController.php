<?php
App::uses('AppController', 'Controller');
 App::import('Controller', 'CaTypes');
 // App::import('Controller', 'Products'); // mention at top

// Instantiation // mention within cron function
$CaTypes = new CaTypesController;
// Call a method from
// $rah=$CaTypes->add();
// pr($rah); exit;

/**
 * CertAuthorities Controller
 *
 * @property CertAuthority $CertAuthority
 * @property PaginatorComponent $Paginator
 */
class CertAuthoritiesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	//public $components = array('Paginator');
	public $uses=array('CaType','CertAuthority','City','Country','State');


/**
 * index method
 *
 * @return void
 */
	public function index() {
		// $this->CertAuthority->recursive = 0;
		// $this->set('certAuthorities', $this->Paginator->paginate());

		$certAuthorities=$this->CertAuthority->find('all',array(
			'joins'=>array(array(
				'table'=>'ca_types',
				'alias'=>'Ca_type',
				'type'=>'INNER',
				'conditions'=>array('CertAuthority.ca_type=Ca_type.id')
				),
			array(
						'table'=>'cities',
						'alias'=>'City',
						'type'=>'INNER',
						'conditions'=>array('CertAuthority.city=City.id')
			)),
			'fields'=>array('CertAuthority.*','Ca_type.ca_type','City.name')

			));
			$this->set('certAuthorities',$certAuthorities);
			// $this->set('CaTypes',$CaTypes);

	}




/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->CertAuthority->exists($id)) {
			throw new NotFoundException(__('Invalid cert authority'));
		}
		$options = array('conditions' => array('CertAuthority.' . $this->CertAuthority->primaryKey => $id));
		$this->set('certAuthority', $this->CertAuthority->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		// echo "asdasd" ; exit;
		if ($this->request->is('post')) {
			$data=array(
					'ca_name'=>$this->request->data['CertAuthority']['ca_name'],
					'ca_type'=>$this->request->data['CertAuthority']['ca_type'],
					'ca_code'=>$this->request->data['CertAuthority']['ca_code'],
					'city'=>$this->request->data['city'],

					'date'=>date('Y-m-d')
					);
			$this->CertAuthority->create();
			if ($this->CertAuthority->save($data)) {
				$this->Session->setFlash(__('The cert authority has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The cert authority could not be saved. Please, try again.'));
			}
		}
		//$brgjds=$this->CertAuthority->find('all');


		$ca_types=$this->CaType->find('list',array('fields'=>array('id','ca_type')));
		$this->set('ca_types',$ca_types);
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */


public function edit($id = null) {
		if (!$this->CertAuthority->exists($id)) {
			throw new NotFoundException(__('Invalid cert authority'));
		}
		if ($this->request->is(array('post', 'put'))) {
			// pr($this); 
					$data=array(
					'ca_name'=>"'".$this->request->data['CertAuthority']['ca_name']."'",
					'ca_type'=>"'".$this->request->data['Ca_type']['ca_type']."'",
					'ca_code'=>"'".$this->request->data['CertAuthority']['ca_code']."'",
					'city'=>"'".$this->request->data['City']['City']."'",
					'date'=>"'".date('Y-m-d')."'"

					);
			$cond=array('id'=>$id);
			if ($this->CertAuthority->updateAll($data,$cond)) {
				$this->Session->setFlash(__('The cert authority has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The cert authority could not be saved. Please, try again.'));
			}
		} else {

			$location=$this->CertAuthority->find('all',array(
				'conditions'=>array('CertAuthority.id'=>$id),
				'joins'=>array(
					array(
						'table'=>'cities',
						'alias'=>'City',
						'type'=>'INNER',
						'conditions'=>array('City.id=CertAuthority.city')
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
						'table'=>'ca_types',
						'alias'=>'Ca_type',
						'type'=>'INNER',
						'conditions'=>array('Ca_type.id=CertAuthority.ca_type')
					)
					
				),
				'fields'=>array('City.id as  City','Country.id as Country','State.id as State','City.name as cityname','CertAuthority.*','Ca_type.*')
				));

			$this->request->data=$location[0];
				//pr($this->request->data);die();
			$ca_types=$this->CaType->find('list',array('fields'=>array('id','ca_type')));
			$this->set('ca_types',$ca_types);
			$Countries=$this->Country->find('list',array('fields'=>array('id','name')));
			$this->set('countries',$Countries);
			$States=$this->State->find('list',array('fields'=>array('id','name')));
			$this->set('states',$States);
			$Cities=$this->City->find('list',array('fields'=>array('id','name')));
			$this->set('cities',$Cities);
			/*$options = array('conditions' => array('CertAuthority.' . $this->CertAuthority->primaryKey => $id));
			$this->request->data = $this->CertAuthority->find('first', $options,array('joins'=>array(array(
					'table'=>'cities',
					'alias'=>'City',
					'type'=>'INNER',
					'conditions'=>array('City.id=CertAuthority.id')
					)),'fields'=>array('CertAuthority.*,City.*')));
			
			$this->set('ca_types',$ca_types);
			$Countries=$this->Country->find('list',array('fields'=>array('id','name')));
			$States=$this->State->find('list',array('fields'=>array('id','name')));
			$Cities=$this->City->find('list',array('fields'=>array('id','name')));
			$this->set('countries',$Countries);
			$this->set('states',$States);
			$this->set('cities',$Cities);*/


			// $cities=$this->City->find('lits',array('fields'=>array('id','name')));
			// $this->set('cities',$cities);
			/* $this->request->data['CertAuthority']['city'];
			$location=$this->City->find('all',array(
				'conditions'=>array('City.id'=>$this->request->data['CertAuthority']['city']),
				'joins'=>array(array(
					'table'=>'states',
					'alias'=>'State',
					'type'=>'INNER',
					'conditions'=>array('City.state_id=State.id')
					),
					array(
					'table'=>'countries',
					'alias'=>'Country',
					'type'=>'INNER',
					'conditions'=>array('Country.id=State.country_id')
					)
				),
				'fields'=>array('City.id','State.id','Country.id')
				));*/

			//pr($location);die();
			$this->set('location',$location[0]);
		}
	}


	// public function edit($id = null) {
	// 	if (!$this->CertAuthority->exists($id)) {
	// 		throw new NotFoundException(__('Invalid cert authority'));
	// 	}
	// 	if ($this->request->is(array('post', 'put'))) {
	// 		if ($this->CertAuthority->save($this->request->data)) {
	// 			$this->Session->setFlash(__('The cert authority has been saved.'));
	// 			return $this->redirect(array('action' => 'index'));
	// 		} else {
	// 			$this->Session->setFlash(__('The cert authority could not be saved. Please, try again.'));
	// 		}
	// 	} else {
	// 		$options = array('conditions' => array('CertAuthority.' . $this->CertAuthority->primaryKey => $id));
	// 		$this->request->data = $this->CertAuthority->find('first', $options);
	// 	}
	// }

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->CertAuthority->id = $id;
		if (!$this->CertAuthority->exists()) {
			throw new NotFoundException(__('Invalid cert authority'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->CertAuthority->delete()) {
			$this->Session->setFlash(__('The cert authority has been deleted.'));
		} else {
			$this->Session->setFlash(__('The cert authority could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}

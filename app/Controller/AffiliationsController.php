<?php
App::uses('AppController', 'Controller');
/**
 * Affiliations Controller
 *
 * @property Affiliation $Affiliation
 * @property PaginatorComponent $Paginator
 */
class AffiliationsController extends AppController {
public $uses=array('CertAuthority','Institution','Affiliation');
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
       $affiliations=$this->Affiliation->find('all',array(
			'joins'=>array(
				array(
					'table'=>'cert_authorities',
					'alias'=>'Cert_authority',
					'type'=>'INNER',
					'conditions'=>array('Affiliation.ca_code=Cert_authority.id')
				),
				array(

				'table'=>'institutions',
				'alias'=>'Institution',
				'type'=>'INNER',
				'conditions'=>array('Affiliation.inst_code=Institution.id')
					
					)
				),

			'fields'=>array('Affiliation.*','Cert_authority.ca_code','Institution.inst_code')
			));
			// pr($courses); exit;
			$this->set('affiliations',$affiliations);
	}



/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$data=array(
					'ca_code'=>$this->request->data['Affiliation']['ca_code'],
					'inst_code'=>$this->request->data['Affiliation']['inst_code'],
					'date'=>date('Y-m-d')
					);
			$this->Affiliation->create();
			if ($this->Affiliation->save($data)) {
				$this->Session->setFlash(__('The Affiliation has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Affiliation could not be saved. Please, try again.'));
			}
		}
		// $brgjds=$this->Course->find('all'); exit;


		$ca_codes=$this->CertAuthority->find('list',array('fields'=>array('id','ca_code')));
		$this->set('ca_codes',$ca_codes);
 
		$inst_codes=$this->Institution->find('list',array('fields'=>array('id','inst_code')));
		// echo "asdasd"; exit;
		$this->set('inst_codes',$inst_codes);
	}



/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Affiliation->exists($id)) {
			throw new NotFoundException(__('Invalid Affiliation'));
		}
		if ($this->request->is(array('post', 'put'))) {
			$data=array(
					'ca_code'=>"'".$this->request->data['Affiliation']['ca_code']."'",
					'inst_code'=>"'".$this->request->data['Affiliation']['inst_code']."'",

					'date'=>"'".date('Y-m-d')."'"
					);
			$cond=array('id'=>$id);
			if ($this->Affiliation->updateAll($data,$cond)) {
				$this->Session->setFlash(__('The Affiliation has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Affiliation could not be saved. Please, try again.'));
			}
		} else {

		$affiliatns=$this->Affiliation->find('all',array(
			'conditions'=>array('Affiliation.id'=>$id),
			'joins'=>array(
				array(
					'table'=>'cert_authorities',
					'alias'=>'Cert_authority',
					'type'=>'INNER',
					'conditions'=>array('Affiliation.ca_code=Cert_authority.id')
				),
				array(

				'table'=>'institutions',
				'alias'=>'Institution',
				'type'=>'INNER',
				'conditions'=>array('Affiliation.inst_code=Institution.id')
					
					)
				),

			'fields'=>array('Affiliation.*','Cert_authority.*','Institution.*')
			));
		    $options = array('conditions' => array('Affiliation.' . $this->Affiliation->primaryKey => $id));
			$this->request->data = $this->Affiliation->find('first', $options);
			$ca_codes=$this->CertAuthority->find('list',array('fields'=>array('id','ca_code')));
			$this->set('ca_codes',$ca_codes);
			$inst_codes=$this->Institution->find('list',array('fields'=>array('id','inst_code')));
			$this->set('inst_codes',$inst_codes);
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
		$this->Affiliation->id = $id;
		if (!$this->Affiliation->exists()) {
			throw new NotFoundException(__('Invalid affiliation'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Affiliation->delete()) {
			$this->Session->setFlash(__('The affiliation has been deleted.'));
		} else {
			$this->Session->setFlash(__('The affiliation could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}

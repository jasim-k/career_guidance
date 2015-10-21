<?php
App::uses('AppController', 'Controller');
/**
 * RankingAuthorities Controller
 *
 * @property RankingAuthority $RankingAuthority
 * @property PaginatorComponent $Paginator
 */
class RankingAuthoritiesController extends AppController {
public $uses=array('RaType','RankingAuthority');


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
     $rankingAuthorities=$this->RankingAuthority->find('all',array(
			'joins'=>array(array(
				'table'=>'ra_types',
				'alias'=>'Ra_type',
				'type'=>'INNER',
				'conditions'=>array('RankingAuthority.ra_type=Ra_type.id')
				)),
			'fields'=>array('RankingAuthority.*','Ra_type.ra_type')
			));
		$this->set('ranking_authorities',$rankingAuthorities);
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->RankingAuthority->exists($id)) {
			throw new NotFoundException(__('Invalid ranking authority'));
		}
		$options = array('conditions' => array('RankingAuthority.' . $this->RankingAuthority->primaryKey => $id));
		$this->set('rankingAuthority', $this->RankingAuthority->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */       
	    public function add() {

		if ($this->request->is('post')) {
			$data=array(
					'authority'=>$this->request->data['RankingAuthority']['authority'],
					'ra_code'=>$this->request->data['RankingAuthority']['ra_code'],
					'ra_type'=>$this->request->data['RankingAuthority']['ra_type'],
					'date'=>date('Y-m-d')
					);

			$this->RankingAuthority->create();
			if ($this->RankingAuthority->save($data)) {
				$this->Session->setFlash(__('The Ranking Authority has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Ranking Authority could not be saved. Please, try again.'));
			}
		}
		$ra_types=$this->RaType->find('list',array('fields'=>array('id','ra_type')));
		$this->set('ra_types',$ra_types);
}


/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->RankingAuthority->exists($id)) {
			throw new NotFoundException(__('Invalid Ranking Authority'));
		}
		if ($this->request->is(array('post', 'put'))) {
			$data=array(
					'authority'=>"'".$this->request->data['RankingAuthority']['authority']."'",
					'ra_code'=>"'".$this->request->data['RankingAuthority']['ra_code']."'",
					'ra_type'=>"'".$this->request->data['RankingAuthority']['ra_type']."'",
					'date'=>"'".date('Y-m-d')."'"
					);
			$cond=array('id'=>$id);
			if ($this->RankingAuthority->updateAll($data,$cond)) {
				$this->Session->setFlash(__('The Ranking Authority has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Ranking Authority could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('RankingAuthority.' . $this->RankingAuthority->primaryKey => $id));
			$this->request->data = $this->RankingAuthority->find('first', $options);
			$ra_types=$this->RaType->find('list',array('fields'=>array('id','ra_type')));
		    $this->set('ra_types',$ra_types);

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
		$this->RankingAuthority->id = $id;
		if (!$this->RankingAuthority->exists()) {
			throw new NotFoundException(__('Invalid ranking authority'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->RankingAuthority->delete()) {
			$this->Session->setFlash(__('The ranking authority has been deleted.'));
		} else {
			$this->Session->setFlash(__('The ranking authority could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}

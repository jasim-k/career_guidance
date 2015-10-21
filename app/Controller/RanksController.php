<?php
App::uses('AppController', 'Controller');
/**
 * Ranks Controller
 *
 * @property Rank $Rank
 * @property PaginatorComponent $Paginator
 */
class RanksController extends AppController {
	public $uses=array('Rank','RankingAuthority');


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
		
		$ranks=$this->Rank->find('all',array(
			'joins'=>array(array(
				'table'=>'ranking_authorities',
				'alias'=>'Ranking_authority',
				'type'=>'INNER',
				'conditions'=>array('Rank.ra_code=Ranking_authority.id')
				)),
			'fields'=>array('Rank.*','Ranking_authority.ra_code')
			));
			$this->set('ranks',$ranks);
	}


/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Rank->exists($id)) {
			throw new NotFoundException(__('Invalid rank'));
		}
		$options = array('conditions' => array('Rank.' . $this->Rank->primaryKey => $id));
		$this->set('rank', $this->Rank->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			
			$data=array(
					'rank'=>$this->request->data['Rank']['rank'],
					'ra_code'=>$this->request->data['Rank']['ra_code'],
					'rank_value'=>$this->request->data['Rank']['rank_value'],

					'date'=>date('Y-m-d')
					);
			$this->Rank->create();
			//PR($this);exit;
			if ($this->Rank->save($data)) {
				$this->Session->setFlash(__('The Rank has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Rank could not be saved. Please, try again.'));
			}
		}
		$ra_codes=$this->RankingAuthority->find('list',array('fields'=>array('id','ra_code')));
		$this->set('ra_codes',$ra_codes);
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Rank->exists($id)) {
			throw new NotFoundException(__('Invalid Rank'));
		}
		if ($this->request->is(array('post', 'put'))) {
			$data=array(
				    'rank'=>"'".$this->request->data['Rank']['rank']."'",
					'ra_code'=>"'".$this->request->data['Rank']['ra_code']."'",
					'rank_value'=>"'".$this->request->data['Rank']['rank_value']."'",

					'date'=>"'".date('Y-m-d')."'"
					);
			$cond=array('id'=>$id);
			if ($this->Rank->updateAll($data,$cond)) {
				$this->Session->setFlash(__('The Rank has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Rank could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Rank.' . $this->Rank->primaryKey => $id));
			$this->request->data = $this->Rank->find('first', $options);

			$ra_codes=$this->RankingAuthority->find('list',array('fields'=>array('id','ra_code')));
		    $this->set('ra_codes',$ra_codes);
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
		$this->Rank->id = $id;
		if (!$this->Rank->exists()) {
			throw new NotFoundException(__('Invalid rank'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Rank->delete()) {
			$this->Session->setFlash(__('The rank has been deleted.'));
		} else {
			$this->Session->setFlash(__('The rank could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}

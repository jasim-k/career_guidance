<?php
App::uses('AppController', 'Controller');
/**
 * CaRanks Controller
 *
 * @property CaRank $CaRank
 * @property PaginatorComponent $Paginator
 */
class CaRanksController extends AppController {
	public $uses=array('CertAuthority','RankingAuthority','CaRank');


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
       $caRanks=$this->CaRank->find('all',array(
			'joins'=>array(
				array(
					'table'=>'ranking_authorities',
					'alias'=>'Ranking_authority',
					'type'=>'INNER',
					'conditions'=>array('CaRank.ra_code=Ranking_authority.id')
				),
				array(

				'table'=>'cert_authorities',
				'alias'=>'Cert_authority',
				'type'=>'INNER',
				'conditions'=>array('CaRank.ca_code=Cert_authority.id')
					
					)
				),

			'fields'=>array('CaRank.*','Ranking_authority.ra_code','Cert_authority.ca_code')
			));
			// pr($courses); exit;
			$this->set('caRanks',$caRanks);
	}




/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->CaRank->exists($id)) {
			throw new NotFoundException(__('Invalid ca rank'));
		}
		$options = array('conditions' => array('CaRank.' . $this->CaRank->primaryKey => $id));
		$this->set('caRank', $this->CaRank->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$data=array(
					'ra_code'=>$this->request->data['CaRank']['ra_code'],
					'ca_code'=>$this->request->data['CaRank']['ca_code'],
				    'rank_value'=>$this->request->data['CaRank']['rank_value'],
				
					'date'=>date('Y-m-d')
					);
			$this->CaRank->create();
			if ($this->CaRank->save($data)) {
				$this->Session->setFlash(__('The Ca Rank has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Ca Rank could not be saved. Please, try again.'));
			}
		}
		// $brgjds=$this->Course->find('all'); exit;


		// $ra_codes=$this->RankingAuthority->find('list',array('fields'=>array('id','ra_code')));
		// $this->set('ra_codes',$ra_codes);
		$RankingAuthorty=$this->RankingAuthority->find('list',array(
			'joins'=>array(
				array(
					'table'=>'ra_types',
					'alias'=>'Ra_type',
					'type'=>'INNER',
					'conditions'=>array('RankingAuthority.ra_type=Ra_type.id','Ra_type.ra_type' => 'certify authority'),
					// 'conditions' => array()
				)
				),

			'fields'=>array('RankingAuthority.ra_type','RankingAuthority.ra_code')
			));

        // SELECT * FROM `ranking_authorities`, ra_types WHERE(ra_types.id = ranking_authorities.ra_type and ra_types.ra_type='Institution')
        
$RankingAuthorityRaCode=$RankingAuthorty;
// pr($this);exit;
// pr($RankingAuthorityRaCode); exit;
		//$ra_codes=$this->RankingAuthority->find('list',array('fields'=>array('id','ra_code')));
		// pr($ra_codes); exit;
		$this->set('ra_codes',$RankingAuthorityRaCode);
 
		$ca_codes=$this->CertAuthority->find('list',array('fields'=>array('id','ca_code')));
		// echo "asdasd"; exit;
		$this->set('ca_codes',$ca_codes);
		
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->CaRank->exists($id)) {
			throw new NotFoundException(__('Invalid Ca Rank'));
		}
		if ($this->request->is(array('post', 'put'))) {
			// pr($this); exit;
			$data=array(
					'ra_code'=>"'".$this->request->data['CaRank']['ra_code']."'",
					'ca_code'=>"'".$this->request->data['CaRank']['ca_code']."'",
					'rank_value'=>"'".$this->request->data['CaRank']['rank_value']."'",

					'date'=>"'".date('Y-m-d')."'"
					);
			$cond=array('id'=>$id);
			if ($this->CaRank->updateAll($data,$cond)) {
				$this->Session->setFlash(__('The Ca Rank has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Ca Rank could not be saved. Please, try again.'));
			}
		} else {
			$caRans=$this->CaRank->find('all',array(
			'conditions'=>array('CaRank.id'=>$id),
			'joins'=>array(
				array(
					'table'=>'ranking_authorities',
					'alias'=>'Ranking_authority',
					'type'=>'INNER',
					'conditions'=>array('CaRank.ra_code=Ranking_authority.id')
				),
				array(

				'table'=>'cert_authorities',
				'alias'=>'Cert_authority',
				'type'=>'INNER',
				'conditions'=>array('CaRank.ca_code=Cert_authority.id')
					
					)
				
				),

			'fields'=>array('CaRank.*','Ranking_authority.*','Cert_authority.*')
			));
			$options = array('conditions' => array('CaRank.' . $this->CaRank->primaryKey => $id));
			$this->request->data = $this->CaRank->find('first', $options);

			// $ra_codes=$this->RankingAuthority->find('list',array('fields'=>array('id','ra_code')));
			// $this->set('ra_codes',$ra_codes);



			$RankingAuthorty=$this->RankingAuthority->find('list',array(
			'joins'=>array(
				array(
					'table'=>'ra_types',
					'alias'=>'Ra_type',
					'type'=>'INNER',
					'conditions'=>array('RankingAuthority.ra_type=Ra_type.id','Ra_type.ra_type' => 'certify authority'),
					// 'conditions' => array()
				)
				),

			'fields'=>array('RankingAuthority.ra_type','RankingAuthority.ra_code')
			));

        // SELECT * FROM `ranking_authorities`, ra_types WHERE(ra_types.id = ranking_authorities.ra_type and ra_types.ra_type='Institution')
        
$RankingAuthorityRaCode=$RankingAuthorty;
// pr($this);exit;
// pr($RankingAuthorityRaCode); exit;
		//$ra_codes=$this->RankingAuthority->find('list',array('fields'=>array('id','ra_code')));
		// pr($ra_codes); exit;
		$this->set('ra_codes',$RankingAuthorityRaCode);
			$ca_codes=$this->CertAuthority->find('list',array('fields'=>array('id','ca_code')));
			$this->set('ca_codes',$ca_codes);
			
			// pr($ca_codes); exit;
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
		$this->CaRank->id = $id;
		if (!$this->CaRank->exists()) {
			throw new NotFoundException(__('Invalid ca rank'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->CaRank->delete()) {
			$this->Session->setFlash(__('The ca rank has been deleted.'));
		} else {
			$this->Session->setFlash(__('The ca rank could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}

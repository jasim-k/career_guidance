<?php
App::uses('AppController', 'Controller');
/**
 * InstRanks Controller
 *
 * @property InstRank $InstRank
 * @property PaginatorComponent $Paginator
 */
class InstRanksController extends AppController {
	public $uses=array('RankingAuthority','Institution','InstRank');

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
       $instRanks=$this->InstRank->find('all',array(
			'joins'=>array(
				array(
					'table'=>'ranking_authorities',
					'alias'=>'Ranking_authority',
					'type'=>'INNER',
					'conditions'=>array('InstRank.ra_code=Ranking_authority.id')
				),
				array(

				'table'=>'institutions',
				'alias'=>'Institution',
				'type'=>'INNER',
				'conditions'=>array('InstRank.inst_code=Institution.id')
					
					)
				),

			'fields'=>array('InstRank.*','Ranking_authority.ra_code','Institution.inst_code')
			));
			// pr($courses); exit;
			$this->set('instRanks',$instRanks);
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->InstRank->exists($id)) {
			throw new NotFoundException(__('Invalid inst rank'));
		}
		$options = array('conditions' => array('InstRank.' . $this->InstRank->primaryKey => $id));
		$this->set('instRank', $this->InstRank->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$data=array(	
					
					'inst_code'=>$this->request->data['InstRank']['inst_code'],
					'ra_code'=>$this->request->data['InstRank']['ra_code'],
					'rank_value'=>$this->request->data['InstRank']['rank_value'],
				
					'date'=>date('Y-m-d')

					);
			$this->InstRank->create();
			if ($this->InstRank->save($data)) {
				$this->Session->setFlash(__('The Inst Rank has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Inst Rank could not be saved. Please, try again.'));
			}
		}
		// $brgjds=$this->Course->find('all'); exit;

        $inst_codes=$this->Institution->find('list',array('fields'=>array('id','inst_code')));
		$this->set('inst_codes',$inst_codes);

		// $conditions = array("ra_types.id" => "ranking_authorities.ra_type", "ra_types.ra_type" => 'Institution');
		
		// $this->RankingAuthority->find('all', array('conditions' => $conditions));
// echo "Asdasd";
		$RankingAuthorty=$this->RankingAuthority->find('list',array(
			'joins'=>array(
				array(
					'table'=>'ra_types',
					'alias'=>'Ra_type',
					'type'=>'INNER',
					'conditions'=>array('RankingAuthority.ra_type=Ra_type.id','Ra_type.ra_type' => 'Institution'),
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


		
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->InstRank->exists($id)) {
			throw new NotFoundException(__('Invalid Inst Rank'));
		}
		if ($this->request->is(array('post', 'put'))) {
			// pr($this); exit;
			$data=array(
				    'inst_code'=>"'".$this->request->data['InstRank']['inst_code']."'",
					'ra_code'=>"'".$this->request->data['InstRank']['ra_code']."'",
					'rank_value'=>"'".$this->request->data['InstRank']['rank_value']."'",
					'date'=>"'".date('Y-m-d')."'"
					);

			$cond=array('id'=>$id);
			// echo $id; exit;

			if ($this->InstRank->updateAll($data,$cond)) {
				// echo "1"; exit;
				$this->Session->setFlash(__('The Inst Rank has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				// echo "2"; exit;
				$this->Session->setFlash(__('The Inst Rank could not be saved. Please, try again.'));
			}
		} else {
			// echo "3"; exit;
			$options = array('conditions' => array('InstRank.' . $this->InstRank->primaryKey => $id));
			$this->request->data = $this->InstRank->find('first', $options);

			$inst_codes=$this->Institution->find('list',array('fields'=>array('id','inst_code')));
		    $this->set('inst_codes',$inst_codes);

		  $RankingAuthorty=$this->RankingAuthority->find('list',array(
			'joins'=>array(
				array(
					'table'=>'ra_types',
					'alias'=>'Ra_type',
					'type'=>'INNER',
					'conditions'=>array('RankingAuthority.ra_type=Ra_type.id','Ra_type.ra_type' => 'Institution'),
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
		$this->InstRank->id = $id;
		if (!$this->InstRank->exists()) {
			throw new NotFoundException(__('Invalid inst rank'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->InstRank->delete()) {
			$this->Session->setFlash(__('The inst rank has been deleted.'));
		} else {
			$this->Session->setFlash(__('The inst rank could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}

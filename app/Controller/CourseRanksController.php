<?php
App::uses('AppController', 'Controller');
/**
 * CourseRanks Controller
 *
 * @property CourseRank $CourseRank
 * @property PaginatorComponent $Paginator
 */
class CourseRanksController extends AppController {
public $uses=array('CourseRank','RankingAuthority');

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
		
		$courseRanks=$this->CourseRank->find('all',array(
			'joins'=>array(array(
				'table'=>'ranking_authorities',
				'alias'=>'Ranking_authority',
				'type'=>'INNER',
				'conditions'=>array('CourseRank.ra_code=Ranking_authority.id')
				)),
			'fields'=>array('CourseRank.*','Ranking_authority.ra_code')
			));
			$this->set('courseRanks',$courseRanks);
	}


/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->CourseRank->exists($id)) {
			throw new NotFoundException(__('Invalid course rank'));
		}
		$options = array('conditions' => array('CourseRank.' . $this->CourseRank->primaryKey => $id));
		$this->set('courseRank', $this->CourseRank->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$data=array(
					'rank'=>$this->request->data['CourseRank']['rank'],
					'ra_code'=>$this->request->data['Ranking_authority']['ra_code'],
					'rank_value'=>$this->request->data['CourseRank']['rank_value'],

					'date'=>date('Y-m-d')
					);
			$this->CourseRank->create();
			if ($this->CourseRank->save($data)) {
				$this->Session->setFlash(__('The Course Rank has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Course Rank could not be saved. Please, try again.'));
			}
		}
		// $ra_codes=$this->RankingAuthority->find('list',array('fields'=>array('id','ra_code')));
		// $this->set('ra_codes',$ra_codes);



		$RankingAuthorty=$this->RankingAuthority->find('list',array(
			'joins'=>array(
				array(
					'table'=>'ra_types',
					'alias'=>'Ra_type',
					'type'=>'INNER',
					'conditions'=>array('RankingAuthority.ra_type=Ra_type.id','Ra_type.ra_type' => 'course'),
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
		if (!$this->CourseRank->exists($id)) {
			throw new NotFoundException(__('Invalid Course Rank'));
		}
		if ($this->request->is(array('post', 'put'))) {
			$data=array(
				    'rank'=>"'".$this->request->data['CourseRank']['rank']."'",
					'ra_code'=>"'".$this->request->data['CourseRank']['ra_code']."'",
					'rank_value'=>"'".$this->request->data['CourseRank']['rank_value']."'",

					'date'=>"'".date('Y-m-d')."'"
					);
			$cond=array('id'=>$id);
			if ($this->CourseRank->updateAll($data,$cond)) {
				$this->Session->setFlash(__('The Course Rank has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Course Rank could not be saved. Please, try again.'));
			}
		} else {
			$courseRans=$this->CourseRank->find('all',array(
				'conditions'=>array('CourseRank.id'=>$id),
			'joins'=>array(array(
				'table'=>'ranking_authorities',
				'alias'=>'Ranking_authority',
				'type'=>'INNER',
				'conditions'=>array('CourseRank.ra_code=Ranking_authority.id')
				)),
			'fields'=>array('CourseRank.*','Ranking_authority.*')
			));
			$options = array('conditions' => array('CourseRank.' . $this->CourseRank->primaryKey => $id));
			$this->request->data = $this->CourseRank->find('first', $options);

			// $ra_codes=$this->RankingAuthority->find('list',array('fields'=>array('id','ra_code')));
		 //    $this->set('ra_codes',$ra_codes);

		    
		$RankingAuthorty=$this->RankingAuthority->find('list',array(
			'joins'=>array(
				array(
					'table'=>'ra_types',
					'alias'=>'Ra_type',
					'type'=>'INNER',
					'conditions'=>array('RankingAuthority.ra_type=Ra_type.id','Ra_type.ra_type' => 'course'),
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
		$this->CourseRank->id = $id;
		if (!$this->CourseRank->exists()) {
			throw new NotFoundException(__('Invalid course rank'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->CourseRank->delete()) {
			$this->Session->setFlash(__('The course rank has been deleted.'));
		} else {
			$this->Session->setFlash(__('The course rank could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}

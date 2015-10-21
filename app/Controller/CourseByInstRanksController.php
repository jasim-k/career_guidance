<?php
App::uses('AppController', 'Controller');
/**
 * CourseByInstRanks Controller
 *
 * @property CourseByInstRank $CourseByInstRank
 * @property PaginatorComponent $Paginator
 */
class CourseByInstRanksController extends AppController {
	public $uses=array('RankingAuthority','Institution','CourseByCa','CourseByInstRank');


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
       $courseByInstRanks=$this->CourseByInstRank->find('all',array(
			'joins'=>array(
				array(
					'table'=>'ranking_authorities',
					'alias'=>'Ranking_authority',
					'type'=>'INNER',
					'conditions'=>array('CourseByInstRank.ra_code=Ranking_authority.id')
				),
				array(

				'table'=>'institutions',
				'alias'=>'Institution',
				'type'=>'INNER',
				'conditions'=>array('CourseByInstRank.inst_code=Institution.id')
					
					),
				array(

				'table'=>'course_by_cas',
				'alias'=>'Course_by_ca',
				'type'=>'INNER',
				'conditions'=>array('CourseByInstRank.co_code=Course_by_ca.id')
					
					)
				),

			'fields'=>array('CourseByInstRank.*','Ranking_authority.ra_code','Institution.inst_code','Course_by_ca.co_code')
			));
			// pr($courses); exit;
			$this->set('courseByInstRanks',$courseByInstRanks);
	}
/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->CourseByInstRank->exists($id)) {
			throw new NotFoundException(__('Invalid course by inst rank'));
		}
		$options = array('conditions' => array('CourseByInstRank.' . $this->CourseByInstRank->primaryKey => $id));
		$this->set('courseByInstRank', $this->CourseByInstRank->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {

			$data=array(
					
					'co_code'=>$this->request->data['CourseByInstRank']['co_code'],
					'inst_code'=>$this->request->data['CourseByInstRank']['inst_code'],
					'rank_value'=>$this->request->data['CourseByInstRank']['rank_value'],
					'ra_code'=>$this->request->data['CourseByInstRank']['ra_code'],
					'date'=>date('Y-m-d')
					);
			$this->CourseByInstRank->create();
			if ($this->CourseByInstRank->save($data)) {
				$this->Session->setFlash(__('The Course By Inst Rank has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Course By Inst Rank could not be saved. Please, try again.'));
			}
		}
		// $brgjds=$this->Course->find('all'); exit;


		$co_codes=$this->CourseByCa->find('list',array('fields'=>array('id','co_code')));
		$this->set('co_codes',$co_codes);
 
		$inst_codes=$this->Institution->find('list',array('fields'=>array('id','inst_code')));
		$this->set('inst_codes',$inst_codes);

		
		// $ra_codes=$this->RankingAuthority->find('list',array('fields'=>array('id','ra_code')));
		// $this->set('ra_codes',$ra_codes);



		$RankingAuthorty=$this->RankingAuthority->find('list',array(
			'joins'=>array(
				array(
					'table'=>'ra_types',
					'alias'=>'Ra_type',
					'type'=>'INNER',
					'conditions'=>array('RankingAuthority.ra_type=Ra_type.id','Ra_type.ra_type' => 'institution'),
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
		if (!$this->CourseByInstRank->exists($id)) {
			throw new NotFoundException(__('Invalid Course By Inst Rank'));
		}
		if ($this->request->is(array('post', 'put'))) {
			// pr($this); exit;
			$data=array(
				    'co_code'=>"'".$this->request->data['CourseByInstRank']['co_code']."'",
					'inst_code'=>"'".$this->request->data['CourseByInstRank']['inst_code']."'",
					'rank_value'=>"'".$this->request->data['CourseByInstRank']['rank_value']."'",
					'ra_code'=>"'".$this->request->data['CourseByInstRank']['ra_code']."'",
					'date'=>"'".date('Y-m-d')."'"
					);
			$cond=array('id'=>$id);
			if ($this->CourseByInstRank->updateAll($data,$cond)) {
				$this->Session->setFlash(__('The Course By Inst Rank has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Course By Inst Rank could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('CourseByInstRank.' . $this->CourseByInstRank->primaryKey => $id));
			$this->request->data = $this->CourseByInstRank->find('first', $options);

			$co_codes=$this->CourseByCa->find('list',array('fields'=>array('id','co_code')));
		    $this->set('co_codes',$co_codes);
 
		    $inst_codes=$this->Institution->find('list',array('fields'=>array('id','inst_code')));
		    $this->set('inst_codes',$inst_codes);

		    

		    // $ra_codes=$this->RankingAuthority->find('list',array('fields'=>array('id','ra_code')));
		    // $this->set('ra_codes',$ra_codes);

		$RankingAuthorty=$this->RankingAuthority->find('list',array(
			'joins'=>array(
				array(
					'table'=>'ra_types',
					'alias'=>'Ra_type',
					'type'=>'INNER',
					'conditions'=>array('RankingAuthority.ra_type=Ra_type.id','Ra_type.ra_type' => 'institution'),
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
		$this->CourseByInstRank->id = $id;
		if (!$this->CourseByInstRank->exists()) {
			throw new NotFoundException(__('Invalid course by inst rank'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->CourseByInstRank->delete()) {
			$this->Session->setFlash(__('The course by inst rank has been deleted.'));
		} else {
			$this->Session->setFlash(__('The course by inst rank could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}

<?php
App::uses('AppController', 'Controller');
/**
 * CourseByCaEntrances Controller
 *
 * @property CourseByCaEntrance $CourseByCaEntrance
 * @property PaginatorComponent $Paginator
 */
class CourseByCaEntrancesController extends AppController {
	public $uses=array('CourseByCaEntrance','CourseByCa','Entrance');

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
       $courseByCaEntrances=$this->CourseByCaEntrance->find('all',array(
			'joins'=>array(
				array(
					'table'=>'course_by_cas',
					'alias'=>'Course_by_ca',
					'type'=>'INNER',
					'conditions'=>array('CourseByCaEntrance.co_code=Course_by_ca.id')
				),
				array(

				'table'=>'entrances',
				'alias'=>'Entrance',
				'type'=>'INNER',
				'conditions'=>array('CourseByCaEntrance.entrance=Entrance.id')
					
					)
				),

			'fields'=>array('CourseByCaEntrance.*','Course_by_ca.co_code','Entrance.entrance')
			));
			// pr($courses); exit;
			$this->set('courseByCaEntrances',$courseByCaEntrances);
	}


/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->CourseByCaEntrance->exists($id)) {
			throw new NotFoundException(__('Invalid course by ca entrance'));
		}
		$options = array('conditions' => array('CourseByCaEntrance.' . $this->CourseByCaEntrance->primaryKey => $id));
		$this->set('courseByCaEntrance', $this->CourseByCaEntrance->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$data=array(
				    'entrance'=>$this->request->data['CourseByCaEntrance']['entrance'],
					'co_code'=>$this->request->data['CourseByCaEntrance']['co_code'],
					'date'=>date('Y-m-d')
					);
			$this->CourseByCaEntrance->create();
			if ($this->CourseByCaEntrance->save($data)) {
				$this->Session->setFlash(__('The Course By Ca Entrance has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Course By Ca Entrance could not be saved. Please, try again.'));
			}
		}
		// $brgjds=$this->Course->find('all'); exit;
        
		$co_codes=$this->CourseByCa->find('list',array('fields'=>array('id','co_code')));
		$this->set('co_codes',$co_codes);
		$entrances=$this->Entrance->find('list',array('fields'=>array('id','entrance')));
		$this->set('entrances',$entrances);

		
	}



/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		// echo $id; exit;
		// echo "sdfcsdf"; exit;
		if (!$this->CourseByCaEntrance->exists($id)) {
			throw new NotFoundException(__('Invalid Course By Ca Entrance'));
		}
		// if(empty($this->request->data))
		// {
		// 	echo "asdaasdasdsd"; exit;
		// }
		// else
		// {
		// 	pr($this->request->data); exit;
		// }
		if ($this->request->is(array('post', 'put'))) {
			// pr($this); exit;
			$data=array(
				    'entrance'=>"'".$this->request->data['CourseByCaEntrance']['entrance']."'",
					'co_code'=>"'".$this->request->data['CourseByCaEntrance']['co_code']."'",
					'date'=>"'".date('Y-m-d')."'"
					);
			$cond=array('id'=>$id);
			if ($this->CourseByCaEntrance->updateAll($data,$cond)) {
				$this->Session->setFlash(__('The Course By Ca Entrance has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Course By Ca Entrance could not be saved. Please, try again.'));
			}
		} else {
				$courseByCaEnts=$this->CourseByCaEntrance->find('all',array(
				'conditions'=>array('CourseByCaEntrance.id'=>$id),
			'joins'=>array(
				array(
					'table'=>'course_by_cas',
					'alias'=>'Course_by_ca',
					'type'=>'INNER',
					'conditions'=>array('CourseByCaEntrance.co_code=Course_by_ca.id')
				),
				array(
				'table'=>'entrances',
				'alias'=>'Entrance',
				'type'=>'INNER',
				'conditions'=>array('CourseByCaEntrance.entrance=Entrance.id')
					
					)
				),

			'fields'=>array('CourseByCaEntrance.*','Course_by_ca.*','Entrance.*')
			));
			// pr($courseByCaEnts); exit;

            $options = array('conditions' => array('CourseByCaEntrance.' . $this->CourseByCaEntrance->primaryKey => $id));
			$this->request->data = $this->CourseByCaEntrance->find('first', $options);
		    $co_codes=$this->CourseByCa->find('list',array('fields'=>array('id','co_code')));
		    $this->set('co_codes',$co_codes);
		    $entrances=$this->Entrance->find('list',array('fields'=>array('id','entrance')));
			$this->set('entrances',$entrances);
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
		$this->CourseByCaEntrance->id = $id;
		if (!$this->CourseByCaEntrance->exists()) {
			throw new NotFoundException(__('Invalid course by ca entrance'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->CourseByCaEntrance->delete()) {
			$this->Session->setFlash(__('The course by ca entrance has been deleted.'));
		} else {
			$this->Session->setFlash(__('The course by ca entrance could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}

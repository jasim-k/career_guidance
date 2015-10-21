<?php
App::uses('AppController', 'Controller');

class CoursesController extends AppController {

	public $uses=array('Course','CourseType','CourseLevel','SubjectOne','SubjectTwo','SubjectThree');



	public function index()
	{
		
         
			$courses=$this->Course->find('all',array(
			'joins'=>array(
				array(
					'table'=>'course_types',
					'alias'=>'Course_type',
					'type'=>'INNER',
					'conditions'=>array('Course.course_type=Course_type.id')
				),
				array(

				'table'=>'course_levels',
				'alias'=>'Course_level',
				'type'=>'INNER',
				'conditions'=>array('Course.course_level=Course_level.id')
					
					),
				array(

				'table'=>'subject_ones',
				'alias'=>'Subject_one',
				'type'=>'INNER',
				'conditions'=>array('Course.subject_one=Subject_one.id')
					
					),
				array(

				'table'=>'subject_twos',
				'alias'=>'Subject_two',
				'type'=>'INNER',
				'conditions'=>array('Course.subject_two=Subject_two.id')
					
					),
				array(

				'table'=>'subject_threes',
				'alias'=>'Subject_three',
				'type'=>'INNER',
				'conditions'=>array('Course.subject_three=Subject_three.id')
					
					
					)
				),

			'fields'=>array('Course.*','Course_type.course_type','Course_level.course_level','Subject_one.subject_one','Subject_two.subject_two','Subject_three.subject_three')
			));
			// pr($courses); exit;
			$this->set('courses',$courses);
	}




	public function add() {
		if ($this->request->is('post')) {
			$data=array(
					'course'=>$this->request->data['Course']['course'],
					'course_level'=>$this->request->data['Course']['course_level'],
					'course_type'=>$this->request->data['Course']['course_type'],
					'course_code'=>$this->request->data['Course']['course_code'],
					'subject_one'=>$this->request->data['Course']['subject_one'],
					'subject_two'=>$this->request->data['Course']['subject_two'],
					'subject_three'=>$this->request->data['Course']['subject_three'],
					'date'=>date('Y-m-d')
					);
			$this->Course->create();
			if ($this->Course->save($data)) {
				$this->Session->setFlash(__('The Course has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Course could not be saved. Please, try again.'));
			}
		}
		//$brgjds=$this->Course->find('all');


		$course_types=$this->CourseType->find('list',array('fields'=>array('id','course_type')));
		$this->set('course_types',$course_types);

		$course_levels=$this->CourseLevel->find('list',array('fields'=>array('id','course_level')));
		$this->set('course_levels',$course_levels);

		$subject_ones=$this->SubjectOne->find('list',array('fields'=>array('id','subject_one')));
		$this->set('subject_ones',$subject_ones);

		$subject_twos=$this->SubjectTwo->find('list',array('fields'=>array('id','subject_two')));
		$this->set('subject_twos',$subject_twos);

		$subject_threes=$this->SubjectThree->find('list',array('fields'=>array('id','subject_three')));
		$this->set('subject_threes',$subject_threes);
	}




	public function edit($id = null) {
		if (!$this->Course->exists($id)) {
			throw new NotFoundException(__('Invalid Course'));
		}
		if ($this->request->is(array('post', 'put'))) {
			// pr($this); exit;
			$data=array(
					'course'=>"'".$this->request->data['Course']['course']."'",
					'course_level'=>"'".$this->request->data['Course']['course_level']."'",
					'course_type'=>"'".$this->request->data['Course']['course_type']."'",
					'course_code'=>"'".$this->request->data['Course']['course_code']."'",
					'subject_one'=>"'".$this->request->data['Course']['subject_one']."'",
					'subject_two'=>"'".$this->request->data['Course']['subject_two']."'",
					'subject_three'=>"'".$this->request->data['Course']['subject_three']."'",
					'date'=>"'".date('Y-m-d')."'"
					);
			$cond=array('id'=>$id);
			if ($this->Course->updateAll($data,$cond)) {
				$this->Session->setFlash(__('The Course has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Course could not be saved. Please, try again.'));
			}
		} else {
			
			$cours=$this->Course->find('all',array(
			'conditions'=>array('Course.id'=>$id),
			'joins'=>array(
				array(
					'table'=>'course_types',
					'alias'=>'Course_type',
					'type'=>'INNER',
					'conditions'=>array('Course.course_type=Course_type.id')
				),
				array(

				'table'=>'course_levels',
				'alias'=>'Course_level',
				'type'=>'INNER',
				'conditions'=>array('Course.course_level=Course_level.id')
					
					),
				array(

				'table'=>'subject_ones',
				'alias'=>'Subject_one',
				'type'=>'INNER',
				'conditions'=>array('Course.subject_one=Subject_one.id')
					
					),
				array(

				'table'=>'subject_twos',
				'alias'=>'Subject_two',
				'type'=>'INNER',
				'conditions'=>array('Course.subject_two=Subject_two.id')
					
					),
				array(

				'table'=>'subject_threes',
				'alias'=>'Subject_three',
				'type'=>'INNER',
				'conditions'=>array('Course.subject_three=Subject_three.id')
					
					
					)
				),

			'fields'=>array('Course.*','Course_type.*','Course_level.*','Subject_one.*','Subject_two.*','Subject_three.*')
			));
			$options = array('conditions' => array('Course.' . $this->Course->primaryKey => $id));
			$this->request->data = $this->Course->find('first', $options);
			$course_levels=$this->CourseLevel->find('list',array('fields'=>array('id','course_level')));
			$this->set('course_levels',$course_levels);
			$course_types=$this->CourseType->find('list',array('fields'=>array('id','course_type')));
			$this->set('course_types',$course_types);

			$subject_ones=$this->SubjectOne->find('list',array('fields'=>array('id','subject_one')));
		    $this->set('subject_ones',$subject_ones);

		    $subject_twos=$this->SubjectTwo->find('list',array('fields'=>array('id','subject_two')));
		    $this->set('subject_twos',$subject_twos);

		    $subject_threes=$this->SubjectThree->find('list',array('fields'=>array('id','subject_three')));
		    $this->set('subject_threes',$subject_threes);


		}
	}



	
		public function delete($id = null) {
		$this->Course->id = $id;
		if (!$this->Course->exists()) {
			throw new NotFoundException(__('Invalid Course'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Course->delete()) {
			$this->Session->setFlash(__('The Course has been deleted.'));
		} else {
			$this->Session->setFlash(__('The Course could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
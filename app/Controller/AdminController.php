<?php
App::uses('AppController', 'Controller');
/**
 * Institutions Controller
 *
 * @property Institution $Institution
 * @property PaginatorComponent $Paginator
 */
class AdminController extends AppController {

/**
 * Components
 *
 * @var array
 */
	//public $components = array('Paginator');
	public $uses=array('Inst_type','Institution','CAtype');

/**
 * index method
 *
 * @return void
 */

	public function index() {

	}

	
	
}

<?php
App::uses('AppModel', 'Model');
/**
 * InstType Model
 *
 */
class InstType extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'inst_type' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
}

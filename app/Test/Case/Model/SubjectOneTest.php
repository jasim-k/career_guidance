<?php
App::uses('SubjectOne', 'Model');

/**
 * SubjectOne Test Case
 *
 */
class SubjectOneTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.subject_one'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->SubjectOne = ClassRegistry::init('SubjectOne');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->SubjectOne);

		parent::tearDown();
	}

}

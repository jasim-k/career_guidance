<?php
App::uses('SubjectTwo', 'Model');

/**
 * SubjectTwo Test Case
 *
 */
class SubjectTwoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.subject_two'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->SubjectTwo = ClassRegistry::init('SubjectTwo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->SubjectTwo);

		parent::tearDown();
	}

}

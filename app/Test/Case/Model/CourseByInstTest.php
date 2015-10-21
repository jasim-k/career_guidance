<?php
App::uses('CourseByInst', 'Model');

/**
 * CourseByInst Test Case
 *
 */
class CourseByInstTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.course_by_inst'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CourseByInst = ClassRegistry::init('CourseByInst');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CourseByInst);

		parent::tearDown();
	}

}

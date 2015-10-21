<?php
App::uses('CourseLevel', 'Model');

/**
 * CourseLevel Test Case
 *
 */
class CourseLevelTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.course_level'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CourseLevel = ClassRegistry::init('CourseLevel');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CourseLevel);

		parent::tearDown();
	}

}

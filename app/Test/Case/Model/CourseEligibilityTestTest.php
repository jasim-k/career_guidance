<?php
App::uses('CourseEligibilityTest', 'Model');

/**
 * CourseEligibilityTest Test Case
 *
 */
class CourseEligibilityTestTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.course_eligibility_test'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CourseEligibilityTest = ClassRegistry::init('CourseEligibilityTest');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CourseEligibilityTest);

		parent::tearDown();
	}

}

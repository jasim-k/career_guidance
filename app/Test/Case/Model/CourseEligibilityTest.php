<?php
App::uses('CourseEligibility', 'Model');

/**
 * CourseEligibility Test Case
 *
 */
class CourseEligibilityTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.course_eligibility'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CourseEligibility = ClassRegistry::init('CourseEligibility');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CourseEligibility);

		parent::tearDown();
	}

}

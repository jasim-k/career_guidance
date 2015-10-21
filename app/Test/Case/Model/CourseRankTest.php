<?php
App::uses('CourseRank', 'Model');

/**
 * CourseRank Test Case
 *
 */
class CourseRankTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.course_rank'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CourseRank = ClassRegistry::init('CourseRank');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CourseRank);

		parent::tearDown();
	}

}

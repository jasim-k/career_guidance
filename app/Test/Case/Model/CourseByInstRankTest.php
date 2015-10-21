<?php
App::uses('CourseByInstRank', 'Model');

/**
 * CourseByInstRank Test Case
 *
 */
class CourseByInstRankTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.course_by_inst_rank'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CourseByInstRank = ClassRegistry::init('CourseByInstRank');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CourseByInstRank);

		parent::tearDown();
	}

}

<?php
App::uses('CourseByCaEntrance', 'Model');

/**
 * CourseByCaEntrance Test Case
 *
 */
class CourseByCaEntranceTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.course_by_ca_entrance'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CourseByCaEntrance = ClassRegistry::init('CourseByCaEntrance');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CourseByCaEntrance);

		parent::tearDown();
	}

}

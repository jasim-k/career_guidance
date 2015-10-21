<?php
App::uses('CourseByCa', 'Model');

/**
 * CourseByCa Test Case
 *
 */
class CourseByCaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.course_by_ca'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CourseByCa = ClassRegistry::init('CourseByCa');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CourseByCa);

		parent::tearDown();
	}

}

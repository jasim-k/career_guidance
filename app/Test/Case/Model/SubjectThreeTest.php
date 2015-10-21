<?php
App::uses('SubjectThree', 'Model');

/**
 * SubjectThree Test Case
 *
 */
class SubjectThreeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.subject_three'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->SubjectThree = ClassRegistry::init('SubjectThree');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->SubjectThree);

		parent::tearDown();
	}

}

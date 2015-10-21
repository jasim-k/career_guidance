<?php
App::uses('EligibilityTest', 'Model');

/**
 * EligibilityTest Test Case
 *
 */
class EligibilityTestTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.eligibility_test'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->EligibilityTest = ClassRegistry::init('EligibilityTest');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->EligibilityTest);

		parent::tearDown();
	}

}

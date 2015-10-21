<?php
App::uses('Eligibility', 'Model');

/**
 * Eligibility Test Case
 *
 */
class EligibilityTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.eligibility'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Eligibility = ClassRegistry::init('Eligibility');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Eligibility);

		parent::tearDown();
	}

}

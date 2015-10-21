<?php
App::uses('Entrance', 'Model');

/**
 * Entrance Test Case
 *
 */
class EntranceTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.entrance'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Entrance = ClassRegistry::init('Entrance');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Entrance);

		parent::tearDown();
	}

}

<?php
App::uses('Mode', 'Model');

/**
 * Mode Test Case
 *
 */
class ModeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.mode'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Mode = ClassRegistry::init('Mode');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Mode);

		parent::tearDown();
	}

}

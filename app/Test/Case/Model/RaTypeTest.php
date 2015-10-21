<?php
App::uses('RaType', 'Model');

/**
 * RaType Test Case
 *
 */
class RaTypeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.ra_type'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->RaType = ClassRegistry::init('RaType');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->RaType);

		parent::tearDown();
	}

}

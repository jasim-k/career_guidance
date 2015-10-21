<?php
App::uses('CaType', 'Model');

/**
 * CaType Test Case
 *
 */
class CaTypeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.ca_type'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CaType = ClassRegistry::init('CaType');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CaType);

		parent::tearDown();
	}

}

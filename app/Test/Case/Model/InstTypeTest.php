<?php
App::uses('InstType', 'Model');

/**
 * InstType Test Case
 *
 */
class InstTypeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.inst_type'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->InstType = ClassRegistry::init('InstType');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->InstType);

		parent::tearDown();
	}

}

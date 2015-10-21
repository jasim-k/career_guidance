<?php
App::uses('InstRank', 'Model');

/**
 * InstRank Test Case
 *
 */
class InstRankTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.inst_rank'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->InstRank = ClassRegistry::init('InstRank');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->InstRank);

		parent::tearDown();
	}

}

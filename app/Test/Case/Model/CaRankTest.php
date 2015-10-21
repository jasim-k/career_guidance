<?php
App::uses('CaRank', 'Model');

/**
 * CaRank Test Case
 *
 */
class CaRankTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.ca_rank'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CaRank = ClassRegistry::init('CaRank');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CaRank);

		parent::tearDown();
	}

}

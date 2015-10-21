<?php
App::uses('RankingAuthority', 'Model');

/**
 * RankingAuthority Test Case
 *
 */
class RankingAuthorityTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.ranking_authority'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->RankingAuthority = ClassRegistry::init('RankingAuthority');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->RankingAuthority);

		parent::tearDown();
	}

}

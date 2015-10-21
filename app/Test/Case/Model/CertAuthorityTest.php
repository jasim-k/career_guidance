<?php
App::uses('CertAuthority', 'Model');

/**
 * CertAuthority Test Case
 *
 */
class CertAuthorityTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.cert_authority'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CertAuthority = ClassRegistry::init('CertAuthority');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CertAuthority);

		parent::tearDown();
	}

}

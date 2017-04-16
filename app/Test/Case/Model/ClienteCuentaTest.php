<?php
App::uses('ClienteCuenta', 'Model');

/**
 * ClienteCuenta Test Case
 *
 */
class ClienteCuentaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.cliente_cuenta'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ClienteCuenta = ClassRegistry::init('ClienteCuenta');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ClienteCuenta);

		parent::tearDown();
	}

}

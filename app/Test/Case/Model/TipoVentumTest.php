<?php
App::uses('TipoVentum', 'Model');

/**
 * TipoVentum Test Case
 *
 */
class TipoVentumTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.tipo_ventum'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->TipoVentum = ClassRegistry::init('TipoVentum');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->TipoVentum);

		parent::tearDown();
	}

}

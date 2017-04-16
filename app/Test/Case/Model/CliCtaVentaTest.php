<?php
App::uses('CliCtaVenta', 'Model');

/**
 * CliCtaVenta Test Case
 *
 */
class CliCtaVentaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.cli_cta_venta'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CliCtaVenta = ClassRegistry::init('CliCtaVenta');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CliCtaVenta);

		parent::tearDown();
	}

}

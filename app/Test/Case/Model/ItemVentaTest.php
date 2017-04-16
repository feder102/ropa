<?php
App::uses('ItemVenta', 'Model');

/**
 * ItemVenta Test Case
 *
 */
class ItemVentaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.item_venta'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ItemVenta = ClassRegistry::init('ItemVenta');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ItemVenta);

		parent::tearDown();
	}

}

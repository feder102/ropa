<?php
App::uses('ItemPrenda', 'Model');

/**
 * ItemPrenda Test Case
 *
 */
class ItemPrendaTest extends CakeTestCase {

/**aaa
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.item_prenda'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ItemPrenda = ClassRegistry::init('ItemPrenda');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ItemPrenda);

		parent::tearDown();
	}

}

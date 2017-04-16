<?php
App::uses('ItemDevolucione', 'Model');

/**
 * ItemDevolucione Test Case
 *
 */
class ItemDevolucioneTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.item_devolucione'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ItemDevolucione = ClassRegistry::init('ItemDevolucione');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ItemDevolucione);

		parent::tearDown();
	}

}

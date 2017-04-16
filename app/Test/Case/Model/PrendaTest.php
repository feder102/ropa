<?php
App::uses('Prenda', 'Model');

/**
 * Prenda Test Case
 *
 */
class PrendaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.prenda'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Prenda = ClassRegistry::init('Prenda');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Prenda);

		parent::tearDown();
	}

}

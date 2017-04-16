<?php
App::uses('PrendaListum', 'Model');

/**
 * PrendaListum Test Case
 *
 */
class PrendaListumTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.prenda_listum'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->PrendaListum = ClassRegistry::init('PrendaListum');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->PrendaListum);

		parent::tearDown();
	}

}

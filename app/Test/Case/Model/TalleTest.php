<?php
App::uses('Talle', 'Model');

/**
 * Talle Test Case
 *
 */
class TalleTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.talle'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Talle = ClassRegistry::init('Talle');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Talle);

		parent::tearDown();
	}

}

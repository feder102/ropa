<?php
/**
 * DepositoFixture
 *
 */
class DepositoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id_cuenta_clie' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'importe' => array('type' => 'float', 'null' => true, 'default' => null, 'unsigned' => false),
		'created' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'fk_depositos_1_idx' => array('column' => 'id_cuenta_clie', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id_cuenta_clie' => 1,
			'importe' => 1,
			'created' => 'Lorem ipsum dolor sit amet',
			'id' => 1
		),
	);

}

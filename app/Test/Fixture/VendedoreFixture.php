<?php
/**
 * VendedoreFixture
 *
 */
class VendedoreFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'dni' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'nombre' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'telefono' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'direccion' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'deleted' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'dni', 'unique' => 1)
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
			'dni' => 1,
			'nombre' => 'Lorem ipsum dolor sit amet',
			'telefono' => 'Lorem ipsum dolor ',
			'direccion' => 'Lorem ipsum dolor sit amet',
			'deleted' => 1
		),
	);

}

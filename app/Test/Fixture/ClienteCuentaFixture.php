<?php
/**
 * ClienteCuentaFixture
 *
 */
class ClienteCuentaFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'dni_cliente' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'importe' => array('type' => 'float', 'null' => true, 'default' => null, 'unsigned' => false),
		'deleted' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'dni_cliente', 'unique' => 1),
			'fk_cliente_cuentas_1_idx' => array('column' => 'dni_cliente', 'unique' => 0)
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
			'dni_cliente' => 1,
			'importe' => 1,
			'deleted' => 1
		),
	);

}

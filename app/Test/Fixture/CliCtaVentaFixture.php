<?php
/**
 * CliCtaVentaFixture
 *
 */
class CliCtaVentaFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id_cliente_cuenta' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'id_venta' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'fecha' => array('type' => 'datetime', 'null' => false, 'default' => null, 'key' => 'primary'),
		'indexes' => array(
			'PRIMARY' => array('column' => array('id_cliente_cuenta', 'id_venta', 'fecha'), 'unique' => 1),
			'fk_cli_cta_venta_1_idx' => array('column' => 'id_cliente_cuenta', 'unique' => 0),
			'fk_cli_cta_venta_2_idx' => array('column' => 'id_venta', 'unique' => 0)
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
			'id_cliente_cuenta' => 1,
			'id_venta' => 1,
			'fecha' => '2017-04-16 00:52:24'
		),
	);

}

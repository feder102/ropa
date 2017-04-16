<?php
/**
 * VentaFixture
 *
 */
class VentaFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'importe_final' => array('type' => 'float', 'null' => true, 'default' => null, 'unsigned' => false),
		'deleted' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'id_cliente' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'id_vendedor' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'id_tipo_venta' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'fk_ventas_cliente_idx' => array('column' => 'id_cliente', 'unique' => 0),
			'fk_ventas_tipo_idx' => array('column' => 'id_tipo_venta', 'unique' => 0),
			'fk_ventas_vendedor_idx' => array('column' => 'id_vendedor', 'unique' => 0)
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
			'id' => 1,
			'importe_final' => 1,
			'deleted' => 1,
			'id_cliente' => 1,
			'id_vendedor' => 1,
			'id_tipo_venta' => 1
		),
	);

}

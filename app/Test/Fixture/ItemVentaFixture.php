<?php
/**
 * ItemVentaFixture
 *
 */
class ItemVentaFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'id_venta' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'cantidad' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'id_prenda' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'deleted' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'importe' => array('type' => 'float', 'null' => true, 'default' => null, 'unsigned' => false),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'fk_item_ventas_venta_idx' => array('column' => 'id_venta', 'unique' => 0),
			'fk_item_ventas_prenda_idx' => array('column' => 'id_prenda', 'unique' => 0)
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
			'id_venta' => 1,
			'created' => '2017-04-16 00:48:30',
			'cantidad' => 1,
			'id_prenda' => 1,
			'deleted' => 1,
			'importe' => 1
		),
	);

}

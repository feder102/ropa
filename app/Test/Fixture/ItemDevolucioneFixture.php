<?php
/**
 * ItemDevolucioneFixture
 *
 */
class ItemDevolucioneFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'id_item_venta' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'fecha' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'cantidad' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'deleted' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'fk_item_devoluciones_1_idx' => array('column' => 'id_item_venta', 'unique' => 0)
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
			'id_item_venta' => 1,
			'fecha' => '2017-04-16 00:49:22',
			'cantidad' => 1,
			'deleted' => 1
		),
	);

}

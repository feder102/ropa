<?php
/**
 * ItemPrendaFixture
 *
 */
class ItemPrendaFixture extends CakeTestFixture {

/**
 * Table name www
 *
 * @var string
 */
	public $table = 'item_prenda';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id_prenda' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'id_color' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'id_talle' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'stock' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'deleted' => array('type' => 'boolean', 'null' => true, 'default' => '0'),
		'indexes' => array(
			'PRIMARY' => array('column' => array('id_prenda', 'id_color', 'id_talle'), 'unique' => 1),
			'pk_color_idx' => array('column' => 'id_color', 'unique' => 0),
			'pk_talle_idx' => array('column' => 'id_talle', 'unique' => 0),
			'pk_prenda_idx' => array('column' => 'id_prenda', 'unique' => 0)
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
			'id_prenda' => 1,
			'id_color' => 1,
			'id_talle' => 1,
			'stock' => 1,
			'created' => '2017-04-21 03:18:47',
			'deleted' => 1
		),
	);

}

<?php
/**
 * PrendaFixture
 *
 */
class PrendaFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'descripcion' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'id_color' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'id_talle' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'stock' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'pcosto' => array('type' => 'float', 'null' => true, 'default' => null, 'unsigned' => false),
		'deleted' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'fk_prendas_talle_idx' => array('column' => 'id_talle', 'unique' => 0),
			'fk_prendas_color_idx' => array('column' => 'id_color', 'unique' => 0)
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
			'descripcion' => 'Lorem ipsum dolor sit amet',
			'id_color' => 1,
			'id_talle' => 1,
			'stock' => 1,
			'pcosto' => 1,
			'deleted' => 1
		),
	);

}

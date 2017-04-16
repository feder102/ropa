<?php
/**
 * ListaFixture
 *
 */
class ListaFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'nombre' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'porcentaje' => array('type' => 'float', 'null' => true, 'default' => null, 'unsigned' => false),
		'deleted' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
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
			'nombre' => 'Lorem ipsum dolor sit amet',
			'porcentaje' => 1,
			'deleted' => 1,
			'id' => 1
		),
	);

}

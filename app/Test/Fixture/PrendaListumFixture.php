<?php
/**
 * PrendaListumFixture
 *
 */
class PrendaListumFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id_prenda' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'id_lista' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'indexes' => array(
			'fk_prenda_lista_prenda_idx' => array('column' => 'id_prenda', 'unique' => 0),
			'fk_prenda_lista_listas_idx' => array('column' => 'id_lista', 'unique' => 0)
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
			'id_lista' => 1
		),
	);

}

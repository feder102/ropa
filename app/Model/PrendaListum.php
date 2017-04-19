<?php
App::uses('AppModel', 'Model');
/**
 * PrendaListum Model
 *
 */
class PrendaListum extends AppModel {

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'id_lista';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'id_prenda' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'id_lista' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	public $hasMany = array(
		'Lista' => array(
			'className' => 'Lista',
			'foreignKey' => 'id_lista',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Prenda' => array(
			'className' => 'Prenda',
			'foreignKey' => 'id_prenda',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}

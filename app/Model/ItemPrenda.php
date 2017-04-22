<?php
App::uses('AppModel', 'Model');
/**
 * ItemPrenda Model
 *
 */
class ItemPrenda extends AppModel {
//A
/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'item_prenda';

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'y';

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
		'id_color' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'id_talle' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		// 'deleted' => array(
		// 	'boolean' => array(
		// 		'rule' => array('boolean'),
		// 		//'message' => 'Your custom message here',
		// 		//'allowEmpty' => false,
		// 		//'required' => false,
		// 		//'last' => false, // Stop validation after this rule
		// 		//'on' => 'create', // Limit validation to 'create' or 'update' operations
		// 	),
		// ),
	);
	public $belongsTo = array(
		'Talle' => array(
			'className' => 'Talle' ,
			'foreignKey' => 'id_talle' ,
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Colore' => array(
			'className' => 'Colore' ,
			'foreignKey' => 'id_color' ,
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Prenda' => array(
			'className' => 'Prenda' ,
			'foreignKey' => 'id_prenda' ,
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
 );
}

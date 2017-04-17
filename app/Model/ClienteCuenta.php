<?php
App::uses('AppModel', 'Model');
/**
 * ClienteCuenta Model
 *
 */
class ClienteCuenta extends AppModel {

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'dni_cliente';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'dni_cliente' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'importe' => array(
			'decimal' => array(
				'rule' => array('decimal'),
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
	public $hasOne = array(
		'Cliente' => array(
			'className' => 'Cliente',
			'foreignKey' => 'dni',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
	public $hasMany = array(
		'Deposito' => array(
			'className' => 'Deposito',
			'foreignKey' => 'id_cuenta_clie',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}

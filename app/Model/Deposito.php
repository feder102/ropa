<?php
App::uses('AppModel', 'Model');
/**
 * Deposito Model
 *
 */
class Deposito extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
 public $primaryKey = 'id';

	public $validate = array(
		'id_cuenta_clie' => array(
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
	);
	public $hasMany = array(
		'ClienteCuenta' => array(
			'className' => 'ClienteCuenta',
			'foreignKey' => 'dni_cliente',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
	// public $belongsTo = array(
	// 	'ClienteCuenta' => array(
	// 		'className' => 'ClienteCuenta',
	// 		'foreignKey' => 'dni_cliente',
	// 		'conditions' => '',
	// 		'fields' => '',
	// 		'order' => ''
	// 	)
	// );
}

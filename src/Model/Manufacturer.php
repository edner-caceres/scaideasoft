<?php
App::uses('AppModel', 'Model');
/**
 * Manufacturer Model
 *
 * @property Piece $Piece
 */
class Manufacturer extends AppModel {

/**
 * Use database config
 *
 * @var string
 */
	public $useDbConfig = 'inventory';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'manufacturer_name';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'manufacturer_name' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'is_delete' => array(
			'boolean' => array(
				'rule' => array('boolean'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Piece' => array(
			'className' => 'Piece',
			'foreignKey' => 'manufacturer_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}

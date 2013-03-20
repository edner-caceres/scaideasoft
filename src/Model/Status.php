<?php
App::uses('AppModel', 'Model');
/**
 * Status Model
 *
 */
class Status extends AppModel {

/**
 * Use database config
 *
 * @var string
 */
	public $useDbConfig = 'shared';

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'status';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name_status';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'name_status' => array(
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
}

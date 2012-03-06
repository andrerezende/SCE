<?php
App::uses('AppModel', 'Model');
/**
 * Grupo Model
 *
 * @property Usuario $Usuario
 */
class Grupo extends AppModel {
/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'grupo';

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Usuario' => array(
			'className' => 'Usuario',
			'foreignKey' => 'grupo_id',
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

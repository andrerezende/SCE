<?php
App::uses('AppModel', 'Model');
/**
 * Turno Model
 *
 * @property Curso $Curso
 */
class Turno extends AppModel {
/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'turno';

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Curso' => array(
			'className' => 'Curso',
			'foreignKey' => 'turno_id',
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

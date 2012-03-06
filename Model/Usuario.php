<?php
App::uses('AppModel', 'Model');
/**
 * Usuario Model
 *
 * @property Grupo $Grupo
 * @property Log $Log
 */
class Usuario extends AppModel {
/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'usuario';

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Grupo' => array(
			'className' => 'Grupo',
			'foreignKey' => 'grupo_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

}

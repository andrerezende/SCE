<?php
App::uses('AppModel', 'Model');
/**
 * RegimeCurso Model
 *
 * @property Curso $Curso
 */
class RegimeCurso extends AppModel {
/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'regime_curso';

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Curso' => array(
			'className' => 'Curso',
			'foreignKey' => 'regime_curso_id',
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

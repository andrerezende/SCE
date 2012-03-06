<?php
App::uses('AppModel', 'Model');
/**
 * Pergunta Model
 *
 * @property Resposta $Resposta
 */
class Pergunta extends AppModel {
/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'pergunta';

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Resposta' => array(
			'className' => 'Resposta',
			'foreignKey' => 'pergunta_id',
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

<?php
App::uses('AppModel', 'Model');
/**
 * Resposta Model
 *
 * @property Pergunta $Pergunta
 * @property Aluno $Aluno
 */
class Resposta extends AppModel {
/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'resposta';

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Pergunta' => array(
			'className' => 'Pergunta',
			'foreignKey' => 'pergunta_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Aluno' => array(
			'className' => 'Aluno',
			'joinTable' => 'aluno_resposta',
			'foreignKey' => 'resposta_id',
			'associationForeignKey' => 'aluno_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		)
	);

}

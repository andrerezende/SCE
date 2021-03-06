<?php
App::uses('AppModel', 'Model');
/**
 * AlunoResposta Model
 *
 * @property Aluno $Aluno
 * @property Resposta $Resposta
 */
class AlunoResposta extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'aluno_resposta';

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Aluno' => array(
			'className' => 'Aluno',
			'foreignKey' => 'aluno_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Resposta' => array(
			'className' => 'Resposta',
			'foreignKey' => 'resposta_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

}
<?php
App::uses('AppModel', 'Model');
/**
 * Resposta Model
 *
 * @property Pergunta $Pergunta
 * @property AlunoResposta $AlunoResposta
 */
class Resposta extends AppModel {
/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'resposta';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'descricao';

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
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'AlunoResposta' => array(
			'className' => 'AlunoResposta',
			'foreignKey' => 'resposta_id',
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
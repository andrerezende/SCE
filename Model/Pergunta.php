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

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'descricao';

/**
 * Model behaviors
 *
 * @var array
 */
	public $actsAs = array(
		'Search.Searchable',
	);

/**
 * Configuration for Searchable behavior
 *
 * @var array
 */
	public $filterArgs = array(
		'ano' => array('type' => 'value', 'field' => 'AnoQuestionario.id'),
	);

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'AnoQuestionario' => array(
			'className' => 'AnoQuestionario',
			'foreignKey' => 'ano_questionario_id',
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

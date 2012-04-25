<?php
App::uses('AppModel', 'Model');
/**
 * AnoQuestionario Model
 *
 * @property Pergunta $Pergunta
 */
class AnoQuestionario extends AppModel {
/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'ano_questionario';
/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'descricao';

	// As associações abaixo foram criadas com todas as chaves possíveis, então é possível remover as que não são necessárias

/**
 * Associações hasMany
 *
 * @var array
 */
	public $hasMany = array(
		'Pergunta' => array(
			'className' => 'Pergunta',
			'foreignKey' => 'ano_questionario_id',
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
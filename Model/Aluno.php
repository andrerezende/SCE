<?php
App::uses('AppModel', 'Model');
/**
 * Aluno Model
 *
 * @property Curso $Curso
 * @property AlunoResposta $AlunoResposta
 */
class Aluno extends AppModel {

	const FAIXA_ETARIA_13_15 = 1;
	const FAIXA_ETARIA_16_18 = 2;
	const FAIXA_ETARIA_19_21 = 3;
	const FAIXA_ETARIA_22_26 = 4;
	const FAIXA_ETARIA_27_31 = 5;
	const FAIXA_ETARIA_32_36 = 6;
	const FAIXA_ETARIA_37_41 = 7;
	const FAIXA_ETARIA_42_46 = 8;
	const FAIXA_ETARIA_47_MORE = 9;

	const SEXO_M = 'masculino';
	const SEXO_F = 'feminino';

	const FATOR_RH_P = true;
	const FATOR_RH_N = false;

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'aluno';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'nome';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'curso_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'nome' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'matricula' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'rg' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'sexo' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'data_nascimento' => array(
			'date' => array(
				'rule' => array('date'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Curso' => array(
			'className' => 'Curso',
			'foreignKey' => 'curso_id',
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
			'foreignKey' => 'aluno_id',
			'dependent' => true,
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

	public function mesmoCampus($alunoId, $campusId) {
		$aluno = $this->find('first', array('fields' => array('Aluno.id'), 'contain' => array('Curso'), 'conditions' => array('Aluno.id' => $alunoId, 'Curso.campus_id' => $campusId)));
		return $aluno['Aluno']['id'] === $alunoId;
	}

}
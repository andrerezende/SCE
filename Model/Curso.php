<?php
App::uses('AppModel', 'Model');
/**
 * Curso Model
 *
 * @property Campus $Campus
 * @property Modalidade $Modalidade
 * @property Turno $Turno
 * @property RegimeCurso $RegimeCurso
 * @property Aluno $Aluno
 * @property ModalidadeCurso $ModalidadeCurso
 * @property Regime $Regime
 */
class Curso extends AppModel {
/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'curso';

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
	);

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Campus' => array(
			'className' => 'Campus',
			'foreignKey' => 'campus_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'ModalidadeCurso' => array(
			'className' => 'ModalidadeCurso',
			'foreignKey' => 'modalidade_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Turno' => array(
			'className' => 'Turno',
			'foreignKey' => 'turno_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'RegimeCurso' => array(
			'className' => 'RegimeCurso',
			'foreignKey' => 'regime_curso_id',
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
		'Aluno' => array(
			'className' => 'Aluno',
			'foreignKey' => 'curso_id',
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

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

	//The Associations below have been created with all possible keys, those that are not needed can be removed

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

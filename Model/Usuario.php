<?php
App::uses('AppModel', 'Model');
App::uses('AuthComponent', 'Controller/Component');
/**
 * Usuario Model
 *
 * @property Campus $Campus
 */
class Usuario extends AppModel {

	const PERFIL_ADMIN = 'admin';
	const PERFIL_COMUM = 'comum';

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'usuario';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'nome' => array(
			'isunique' => array(
				'rule' => array('isUnique'),
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
	);

/**
 * beforeSave callback
 *
 * @return boolean
 */
	public function beforeSave() {
		if (isset($this->data[$this->alias]['senha']) && !empty($this->data[$this->alias]['senha'])) {
			$this->data[$this->alias]['senha'] = AuthComponent::password($this->data[$this->alias]['senha']);
		} else {
			unset($this->data[$this->alias]['senha']);
		}
		return true;
	}

}
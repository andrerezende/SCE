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
		'login' => array(
			'isunique' => array(
				'rule' => array('isUnique'),
				'message' => 'Este login já existe',
				'allowEmpty' => false,
				'required' => true,
				'on' => 'create',
			),
		),
		'nome' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'Este campo não pode ser deixado vazio',
				'allowEmpty' => false,
				'required' => true,
				'on' => 'create',
			),
		),
		'senha' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'Este campo não pode ser deixado vazio',
				'allowEmpty' => false,
				'required' => true,
			),
			'minLength' => array(
				'rule' => array('minLength', 6),
				'message' => 'A senha precisa ter um mínimo de seis caracteres',
			),
		),
		'confirma_senha' => array(
			'identical' => array(
				'rule' => array('_identical'),
				'required' => true,
				'on' => 'update',
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

/**
 * identical validation
 *
 * @access protected
 * @return mixed
 */
	protected function _identical($check) {
		if (isset($this->data[$this->alias]['senha'])) {
			if ($this->data[$this->alias]['senha'] != $check['confirma_senha']) {
				return 'As senhas não são iguais. Tente novamente.';
			}
		}
		return true;
	}

}

<?php
App::uses('AppModel', 'Model');
App::uses('AuthComponent', 'Controller/Component');
/**
 * Usuario Model
 *
 * @property Grupo $Grupo
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
 * beforeSave callback
 *
 * @return boolean
 */
	public function beforeSave() {
		if (isset($this->data[$this->alias]['senha'])) {
			$this->data[$this->alias]['senha'] = AuthComponent::password($this->data[$this->alias]['senha']);
		}
		return true;
	}

}
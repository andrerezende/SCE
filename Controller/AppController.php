<?php
App::uses('Controller', 'Controller');
App::uses('Usuario', 'Model');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {

	public $helpers = array(
		'Html',
		'Form',
		'Session',
		'Time',
	);

/**
 * Array containing the names of components this controller uses. Component names
 * should not contain the "Component" portion of the classname.
 *
 * @access public
 * @var array
 * @link http://book.cakephp.org/view/961/components-helpers-and-uses
 */
	public $components = array(
		'Session',
		'Auth' => array(
			'loginAction' => array('controller' => 'usuarios', 'action' => 'login'),
			'loginRedirect' => array('controller' => 'perguntas', 'action' => 'index'),
			'logoutRedirect' => array('controller' => 'pages', 'action' => 'display', 'home'),
			'authorize' => array('Controller'),
		),
		'DebugKit.Toolbar',
	);

/**
 * beforeFilter callback
 *
 * @access public
 * @return void
 */
	public function beforeFilter() {
		$this->setUpAuth();
	}

/**
 * beforeRender callback
 *
 * @access public
 * @return void
 */
	public function beforeRender() {
		$this->setUpUser();
	}

/**
 * isAutorized method
 *
 * @access public
 * @param array $usuario
 * @return boolean
 */
	public function isAuthorized($usuario) {
		if (isset($usuario['perfil']) && $usuario['perfil'] == Usuario::PERFIL_ADMIN) {
			return true;
		}
		return false;
	}

/**
 * setUpAuth method
 *
 * @access protected
 * @return void
 */
	protected function setUpAuth() {
		$this->Auth->authenticate = array(
			AuthComponent::ALL => array(
				'userModel' => 'Usuario',
				'fields' => array(
					'username' => 'login',
					'password' => 'senha',
				),
				'scope' => array(
					'Usuario.ativo' => true,
				),
			),
			'Form',
		);
	}

/**
 * setUpUser method
 *
 * @access protected
 * @return void
 */
	protected function setUpUser() {
		$isAdmin = false;
		$userData = $this->Auth->user();
		if ($userData) {
			if ($userData['perfil'] == Usuario::PERFIL_ADMIN) {
				$isAdmin = true;
			}
			$this->set(compact('userData', 'isAdmin'));
		}
	}

}
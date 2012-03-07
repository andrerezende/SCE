<?php
App::uses('AppController', 'Controller');
/**
 * Usuarios Controller
 *
 * @property Usuario $Usuario
 */
class UsuariosController extends AppController {

/**
 * beforeFilter method
 *
 * @access public
 * @return void
 */
	public function beforeFilter() {
		parent::beforeFilter();
		$this->Auth->allow('add', 'logout');
	}

/**
 * index method
 *
 * @access public
 * @return void
 */
	public function index() {
		$this->Usuario->recursive = 0;
		$this->set('usuarios', $this->paginate());
	}

/**
 * view method
 *
 * @access public
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Usuario->id = $id;
		if (!$this->Usuario->exists()) {
			throw new NotFoundException(__('Invalid usuario'));
		}
		$this->set('usuario', $this->Usuario->read(null, $id));
	}

/**
 * add method
 * 
 * @access public
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Usuario->create();
			if ($this->Usuario->save($this->request->data)) {
				$this->Session->setFlash(__('The usuario has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The usuario could not be saved. Please, try again.'));
			}
		}
		$grupos = $this->Usuario->Grupo->find('list');
		$this->set(compact('grupos'));
	}

/**
 * edit method
 *
 * @access public
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Usuario->id = $id;
		if (!$this->Usuario->exists()) {
			throw new NotFoundException(__('Invalid usuario'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Usuario->save($this->request->data)) {
				$this->Session->setFlash(__('The usuario has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The usuario could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Usuario->read(null, $id);
		}
		$grupos = $this->Usuario->Grupo->find('list');
		$this->set(compact('grupos'));
	}

/**
 * delete method
 *
 * @access public
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Usuario->id = $id;
		if (!$this->Usuario->exists()) {
			throw new NotFoundException(__('Invalid usuario'));
		}
		if ($this->Usuario->delete()) {
			$this->Session->setFlash(__('Usuario deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Usuario was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

/**
 * login method
 *
 * @access public
 * @return void
 */
	public function login() {
		if ($this->request->is('post')) {
			if ($this->Auth->login()) {
				$this->redirect($this->Auth->redirect());
			} else {
				$this->Session->setFlash(__('Invalid username or password, try again'));
			}
		}
	}

/**
 * logout method
 *
 * @access public
 * @return void
 */
	public function logout() {
		$this->redirect($this->Auth->logout());
	}

}
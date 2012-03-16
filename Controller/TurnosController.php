<?php
App::uses('AppController', 'Controller');
/**
 * Turnos Controller
 *
 * @property Turno $Turno
 */
class TurnosController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Turno->recursive = 0;
		$this->set('turnos', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Turno->id = $id;
		if (!$this->Turno->exists()) {
			throw new NotFoundException(__('Invalid turno'));
		}
		$this->set('turno', $this->Turno->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Turno->create();
			if ($this->Turno->save($this->request->data)) {
				$this->Session->setFlash(__('The turno has been saved'), 'flash_success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The turno could not be saved. Please, try again.'), 'flash_failure');
			}
		}
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Turno->id = $id;
		if (!$this->Turno->exists()) {
			throw new NotFoundException(__('Invalid turno'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Turno->save($this->request->data)) {
				$this->Session->setFlash(__('The turno has been saved'), 'flash_success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The turno could not be saved. Please, try again.'), 'flash_failure');
			}
		} else {
			$this->request->data = $this->Turno->read(null, $id);
		}
	}

/**
 * delete method
 *
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Turno->id = $id;
		if (!$this->Turno->exists()) {
			throw new NotFoundException(__('Invalid turno'));
		}
		if ($this->Turno->delete()) {
			$this->Session->setFlash(__('Turno deleted'), 'flash_success');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Turno was not deleted'), 'flash_failure');
		$this->redirect(array('action' => 'index'));
	}

}
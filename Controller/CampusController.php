<?php
App::uses('AppController', 'Controller');
/**
 * Campus Controller
 *
 * @property Campus $Campus
 */
class CampusController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Campus->recursive = 0;
		$this->set('campus', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Campus->id = $id;
		if (!$this->Campus->exists()) {
			throw new NotFoundException(__('Invalid campus'));
		}
		$this->set('campus', $this->Campus->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Campus->create();
			if ($this->Campus->save($this->request->data)) {
				$this->Session->setFlash(__('The campus has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The campus could not be saved. Please, try again.'));
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
		$this->Campus->id = $id;
		if (!$this->Campus->exists()) {
			throw new NotFoundException(__('Invalid campus'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Campus->save($this->request->data)) {
				$this->Session->setFlash(__('The campus has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The campus could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Campus->read(null, $id);
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
		$this->Campus->id = $id;
		if (!$this->Campus->exists()) {
			throw new NotFoundException(__('Invalid campus'));
		}
		if ($this->Campus->delete()) {
			$this->Session->setFlash(__('Campus deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Campus was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}

<?php
App::uses('AppController', 'Controller');
/**
 * RegimeCursos Controller
 *
 * @property RegimeCurso $RegimeCurso
 */
class RegimeCursosController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->RegimeCurso->recursive = 0;
		$this->set('regimeCursos', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->RegimeCurso->id = $id;
		if (!$this->RegimeCurso->exists()) {
			throw new NotFoundException(__('Invalid regime curso'));
		}
		$this->set('regimeCurso', $this->RegimeCurso->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->RegimeCurso->create();
			if ($this->RegimeCurso->save($this->request->data)) {
				$this->Session->setFlash(__('The regime curso has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The regime curso could not be saved. Please, try again.'));
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
		$this->RegimeCurso->id = $id;
		if (!$this->RegimeCurso->exists()) {
			throw new NotFoundException(__('Invalid regime curso'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->RegimeCurso->save($this->request->data)) {
				$this->Session->setFlash(__('The regime curso has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The regime curso could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->RegimeCurso->read(null, $id);
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
		$this->RegimeCurso->id = $id;
		if (!$this->RegimeCurso->exists()) {
			throw new NotFoundException(__('Invalid regime curso'));
		}
		if ($this->RegimeCurso->delete()) {
			$this->Session->setFlash(__('Regime curso deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Regime curso was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}

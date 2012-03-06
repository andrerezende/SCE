<?php
App::uses('AppController', 'Controller');
/**
 * ModalidadeCursos Controller
 *
 * @property ModalidadeCurso $ModalidadeCurso
 */
class ModalidadeCursosController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->ModalidadeCurso->recursive = 0;
		$this->set('modalidadeCursos', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->ModalidadeCurso->id = $id;
		if (!$this->ModalidadeCurso->exists()) {
			throw new NotFoundException(__('Invalid modalidade curso'));
		}
		$this->set('modalidadeCurso', $this->ModalidadeCurso->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ModalidadeCurso->create();
			if ($this->ModalidadeCurso->save($this->request->data)) {
				$this->Session->setFlash(__('The modalidade curso has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The modalidade curso could not be saved. Please, try again.'));
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
		$this->ModalidadeCurso->id = $id;
		if (!$this->ModalidadeCurso->exists()) {
			throw new NotFoundException(__('Invalid modalidade curso'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->ModalidadeCurso->save($this->request->data)) {
				$this->Session->setFlash(__('The modalidade curso has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The modalidade curso could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->ModalidadeCurso->read(null, $id);
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
		$this->ModalidadeCurso->id = $id;
		if (!$this->ModalidadeCurso->exists()) {
			throw new NotFoundException(__('Invalid modalidade curso'));
		}
		if ($this->ModalidadeCurso->delete()) {
			$this->Session->setFlash(__('Modalidade curso deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Modalidade curso was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}

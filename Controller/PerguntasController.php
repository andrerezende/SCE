<?php
App::uses('AppController', 'Controller');
/**
 * Perguntas Controller
 *
 * @property Pergunta $Pergunta
 */
class PerguntasController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Pergunta->recursive = 0;
		$this->set('perguntas', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Pergunta->id = $id;
		if (!$this->Pergunta->exists()) {
			throw new NotFoundException(__('Invalid pergunta'));
		}
		$this->set('pergunta', $this->Pergunta->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Pergunta->create();
			if ($this->Pergunta->save($this->request->data)) {
				$this->Session->setFlash(__('The pergunta has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The pergunta could not be saved. Please, try again.'));
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
		$this->Pergunta->id = $id;
		if (!$this->Pergunta->exists()) {
			throw new NotFoundException(__('Invalid pergunta'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Pergunta->save($this->request->data)) {
				$this->Session->setFlash(__('The pergunta has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The pergunta could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Pergunta->read(null, $id);
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
		$this->Pergunta->id = $id;
		if (!$this->Pergunta->exists()) {
			throw new NotFoundException(__('Invalid pergunta'));
		}
		if ($this->Pergunta->delete()) {
			$this->Session->setFlash(__('Pergunta deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Pergunta was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}

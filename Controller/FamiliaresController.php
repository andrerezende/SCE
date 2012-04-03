<?php
App::uses('AppController', 'Controller');
/**
 * Familiares Controller
 *
 * @property Familiar $Familiar
 */
class FamiliaresController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Familiar->recursive = 0;
		$this->set('familiares', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Familiar->id = $id;
		if (!$this->Familiar->exists()) {
			throw new NotFoundException(__('Familiar inválido'));
		}
		$this->set('familiar', $this->Familiar->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Familiar->create();
			if ($this->Familiar->save($this->request->data)) {
				$this->Session->setFlash(__('O familiar foi salvo.'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('O familiar não pode ser salvo. Por favor, tente novamente.'));
			}
		}
		$alunos = $this->Familiar->Aluno->find('list');
		$this->set(compact('alunos'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Familiar->id = $id;
		if (!$this->Familiar->exists()) {
			throw new NotFoundException(__('Familiar inválido.'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Familiar->save($this->request->data)) {
				$this->Session->setFlash(__('O familiar foi salvo.'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('O familiar não pode ser salvo. Por favor, tente novamente.'));
			}
		} else {
			$this->request->data = $this->Familiar->read(null, $id);
		}
		$alunos = $this->Familiar->Aluno->find('list');
		$this->set(compact('alunos'));
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
		$this->Familiar->id = $id;
		if (!$this->Familiar->exists()) {
			throw new NotFoundException(__('familiar inválido.'));
		}
		if ($this->Familiar->delete()) {
			$this->Session->setFlash(__('Familiar excluído.'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Familiar não pode ser excluído.'));
		$this->redirect(array('action' => 'index'));
	}
}
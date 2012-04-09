<?php
App::uses('AppController', 'Controller');
/**
 * Respostas Controller
 *
 * @property Resposta $Resposta
 */
class RespostasController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Resposta->recursive = 0;
		$this->set('respostas', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Resposta->id = $id;
		if (!$this->Resposta->exists()) {
			throw new NotFoundException(__('Invalid resposta'));
		}
		$this->set('resposta', $this->Resposta->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Resposta->create();
			if ($this->Resposta->save($this->request->data)) {
				$this->Session->setFlash(__('The resposta has been saved'), 'flash_success');
				$this->redirect(array('controller' => 'perguntas', 'action' => 'view', $this->request->data['Resposta']['pergunta_id']));
			} else {
				$this->Session->setFlash(__('The resposta could not be saved. Please, try again.'), 'flash_failure');
			}
		}
		$perguntas = $this->Resposta->Pergunta->find('list');
		$this->set(compact('perguntas'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Resposta->id = $id;
		if (!$this->Resposta->exists()) {
			throw new NotFoundException(__('Invalid resposta'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Resposta->save($this->request->data)) {
				$this->Session->setFlash(__('The resposta has been saved'), 'flash_success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The resposta could not be saved. Please, try again.'), 'flash_failure');
			}
		} else {
			$this->request->data = $this->Resposta->read(null, $id);
		}
		$perguntas = $this->Resposta->Pergunta->find('list');
		$this->set(compact('perguntas'));
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
		$this->Resposta->id = $id;
		if (!$this->Resposta->exists()) {
			throw new NotFoundException(__('Invalid resposta'));
		}
		if ($this->Resposta->delete()) {
			$this->Session->setFlash(__('Resposta deleted'), 'flash_success');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Resposta was not deleted'), 'flash_failure');
		$this->redirect(array('action' => 'index'));
	}

}
<?php
App::uses('AppController', 'Controller');
/**
 * AlunoRespostas Controller
 *
 * @property AlunoResposta $AlunoResposta
 */
class AlunoRespostasController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->AlunoResposta->recursive = 0;
		$this->set('alunoRespostas', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->AlunoResposta->id = $id;
		if (!$this->AlunoResposta->exists()) {
			throw new NotFoundException(__('Invalid aluno resposta'));
		}
		$this->set('alunoResposta', $this->AlunoResposta->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->AlunoResposta->create();
			if ($this->AlunoResposta->save($this->request->data)) {
				$this->Session->setFlash(__('The aluno resposta has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The aluno resposta could not be saved. Please, try again.'));
			}
		}
		$alunos = $this->AlunoResposta->Aluno->find('list');
		$respostas = $this->AlunoResposta->Resposta->find('list');
		$this->set(compact('alunos', 'respostas'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->AlunoResposta->id = $id;
		if (!$this->AlunoResposta->exists()) {
			throw new NotFoundException(__('Invalid aluno resposta'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->AlunoResposta->save($this->request->data)) {
				$this->Session->setFlash(__('The aluno resposta has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The aluno resposta could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->AlunoResposta->read(null, $id);
		}
		$alunos = $this->AlunoResposta->Aluno->find('list');
		$respostas = $this->AlunoResposta->Resposta->find('list');
		$this->set(compact('alunos', 'respostas'));
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
		$this->AlunoResposta->id = $id;
		if (!$this->AlunoResposta->exists()) {
			throw new NotFoundException(__('Invalid aluno resposta'));
		}
		if ($this->AlunoResposta->delete()) {
			$this->Session->setFlash(__('Aluno resposta deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Aluno resposta was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}

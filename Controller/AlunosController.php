<?php
App::uses('AppController', 'Controller');
/**
 * Alunos Controller
 *
 * @property Aluno $Aluno
 */
class AlunosController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Aluno->recursive = 0;
		$this->set('alunos', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Aluno->id = $id;
		if (!$this->Aluno->exists()) {
			throw new NotFoundException(__('Invalid aluno'));
		}
		$respostas = $this->Aluno->AlunoResposta->find('all', array('conditions' => array('aluno_id' => $id), 'contain' => array('Resposta' => array('Pergunta'))));
//		$perguntas = $this->Aluno->AlunoResposta->Resposta->Pergunta->find('list');
		$aluno = $this->Aluno->read(null, $id);
		$this->set(compact('aluno', 'respostas', 'perguntas'));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Aluno->create();
			if ($this->Aluno->save($this->request->data)) {
				$this->Session->setFlash(__('The aluno has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The aluno could not be saved. Please, try again.'));
			}
		}
		$cursos = $this->Aluno->Curso->find('list');
		$respostas = $this->Aluno->AlunoResposta->Resposta->find('list');
		$this->set(compact('cursos', 'respostas'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Aluno->id = $id;
		if (!$this->Aluno->exists()) {
			throw new NotFoundException(__('Invalid aluno'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Aluno->save($this->request->data)) {
				$this->Session->setFlash(__('The aluno has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The aluno could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Aluno->read(null, $id);
		}
		$cursos = $this->Aluno->Curso->find('list');
		$respostas = $this->Aluno->Resposta->find('list');
		$this->set(compact('cursos', 'respostas'));
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
		$this->Aluno->id = $id;
		if (!$this->Aluno->exists()) {
			throw new NotFoundException(__('Invalid aluno'));
		}
		if ($this->Aluno->delete()) {
			$this->Session->setFlash(__('Aluno deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Aluno was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

	public function passo_um() {
		if ($this->request->is('post')) {
			$this->Aluno->create();
			if ($this->Aluno->save($this->request->data)) {
				$this->Session->setFlash(__('Dados da identificação do estudante salvos'));
				$this->redirect(array('action' => 'passo_dois', 'aluno_id' => $this->Aluno->id));
			} else {
				$this->Session->setFlash(__('Os dados não foram salvos, tente novamente'));
			}
		}
		$cursos = $this->Aluno->Curso->find('list');
		$this->set(compact('cursos'));
	}

	public function passo_dois() {
		if ($this->request->is('post')) {
			$this->Aluno->id = $this->params->named['aluno_id'];
			if ($this->Aluno->saveAssociated($this->request->data)) {
				$this->Session->setFlash(__('Dados da identificação do estudante salvos'));
				$this->redirect(array('action' => 'view', $this->params->named['aluno_id']));
			} else {
				$this->Session->setFlash(__('Os dados não foram salvos, tente novamente'));
			}
		}
		$perguntas = $this->Aluno->AlunoResposta->Resposta->Pergunta->find('all');
		$this->set(compact('perguntas'));
	}

}
<?php
App::uses('AppController', 'Controller');
/**
 * Alunos Controller
 *
 * @property Aluno $Aluno
 */
class AlunosController extends AppController {

/**
 * Paginate settings
 *
 * @var array
 * @access public
 */
	public $paginate;

/**
 * isAutorized method
 *
 * @access public
 * @param array $usuario
 * @return boolean
 */
	public function isAuthorized($usuario) {
		if (parent::isAuthorized($usuario)) {
			return true;
		}
		if (in_array($this->action, array('edit', 'delete'))) {
			$alunoId = $this->request->params['pass'][0];
			if ($this->Aluno->mesmoCampus((int)$alunoId, $usuario['campus_id'])) {
				return true;
			} else {
				return false;
			}
		}
	}

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$campus_id = $this->Auth->user('campus_id');
		if (!is_null($campus_id)) {
			$this->paginate = array(
				'Aluno' => array(
					'contain' => array('Curso'),
					'conditions' => array('Curso.campus_id' => $this->Auth->user('campus_id'))
				)
			);
		}
		$this->set('alunos', $this->paginate('Aluno'));
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
				$this->Session->setFlash(__('The aluno has been saved'), 'flash_success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The aluno could not be saved. Please, try again.'), 'flash_failure');
			}
		}
		$cursos = $this->Aluno->Curso->find('list', array('conditions' => array('Curso.campus_id' => $this->Auth->user('campus_id'))));
		$this->set(compact('cursos'));
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
				$this->Session->setFlash(__('The aluno has been saved'), 'flash_success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The aluno could not be saved. Please, try again.'), 'flash_failure');
			}
		} else {
			$this->request->data = $this->Aluno->read(null, $id);
		}
		$cursos = $this->Aluno->Curso->find('list', array('conditions' => array('Curso.campus_id' => $this->Auth->user('campus_id'))));
		$this->set(compact('cursos'));
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
			$this->Session->setFlash(__('Aluno deleted'), 'flash_success');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Aluno was not deleted'), 'flash_failure');
		$this->redirect(array('action' => 'index'));
	}

	public function passo_um() {
		if ($this->request->is('post')) {
			$this->Aluno->create();
			if ($this->Aluno->save($this->request->data)) {
				$this->Session->setFlash(__('Dados da identificação do estudante salvos'), 'flash_success');
				$this->redirect(array('action' => 'passo_dois', 'aluno_id' => $this->Aluno->id));
			} else {
				$this->Session->setFlash(__('Os dados não foram salvos, tente novamente'), 'flash_failure');
			}
		}
		$cursos = $this->Aluno->Curso->find('list', array('conditions' => array('Curso.campus_id' => $this->Auth->user('campus_id'))));
		$this->set(compact('cursos'));
	}

	public function passo_dois() {
		if ($this->request->is('post')) {
			$this->Aluno->id = $this->params->named['aluno_id'];
			if ($this->Aluno->saveAssociated($this->request->data)) {
				$this->Session->setFlash(__('Dados da identificação do estudante salvos'), 'flash_success');
				$this->redirect(array('action' => 'view', $this->Aluno->id));
			} else {
				$this->Session->setFlash(__('Os dados não foram salvos, tente novamente'), 'flash_failure');
			}
		}
		$perguntas = $this->Aluno->AlunoResposta->Resposta->Pergunta->find('all');
		$this->set(compact('perguntas'));
	}

}
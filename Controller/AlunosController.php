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
	public $paginate = array(
		'Aluno' => array(
			'order' => array('Aluno.id'),
		),
	);

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
		if (in_array($this->action, array('passo_um', 'passo_dois'))) {
			if (isset($this->params->named['aluno_id']) && !empty($this->params->named['aluno_id'])) {
				$alunoId = $this->params->named['aluno_id'];
			}
		} else if (in_array($this->action, array('edit', 'delete'))) {
			$alunoId = $this->request->params['pass'][0];
		}
		if (isset($alunoId) && !empty($alunoId)) {
			if ($this->Aluno->mesmoCampus((int)$alunoId, $usuario['campus_id'])) {
				return true;
			} else {
				return false;
			}
		}
		return true;
	}

/**
 * index method
 *
 * @return void
 */
	public function index() {
		if ($this->Auth->user('perfil') != Usuario::PERFIL_ADMIN) {
			$this->paginate += array(
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

/**
 * passo_um method
 *
 * @return void
 */
	public function passo_um() {
		if (isset($this->params->named['aluno_id'])) {
			$this->Aluno->id = $this->params->named['aluno_id'];
			if (!$this->Aluno->exists()) {
				throw new NotFoundException(__('Invalid aluno'));
			}
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			$this->Aluno->create();
			if ($this->Aluno->save($this->request->data)) {
				$this->Session->setFlash(__('Dados da identificação do estudante salvos'), 'flash_success');
				$this->redirect(array('action' => 'passo_dois', 'aluno_id' => $this->Aluno->id));
			} else {
				$this->Session->setFlash(__('Os dados não foram salvos, tente novamente'), 'flash_failure');
			}
		} else if (isset($this->params->named['aluno_id'])) {
			$this->request->data = $this->Aluno->read(null, $this->params->named['aluno_id']);
		}

		if ($this->Auth->user('perfil') != Usuario::PERFIL_ADMIN) {
			$cursos = $this->Aluno->Curso->find('list', array('conditions' => array('Curso.campus_id' => $this->Auth->user('campus_id'))));
		} else {
			$cursos = $this->Aluno->Curso->find('list');
		}
		$regimeCursos = $this->Aluno->RegimeCurso->find('list');
		$this->set(compact('cursos', 'regimeCursos'));
	}

/**
 * passo_dois method
 *
 * @return void
 */
	public function passo_dois() {
		if (!isset($this->params->named['ano'])) {
			$this->loadModel('AnoQuestionario');
			$anoQuestionarios = $this->AnoQuestionario->find('list', array('order' => 'AnoQuestionario.descricao DESC'));
			$padrao = $this->AnoQuestionario->find('first', array(
				'fields' => 'AnoQuestionario.id',
				'order' => 'AnoQuestionario.descricao DESC',
				'contain' => array(),
				'conditions' => array('default' => true)
			));
			$this->set(compact('anoQuestionarios', 'padrao'));
			$this->render('/Elements/seleciona_ano');
		}
		if (isset($this->params->named['aluno_id'])) {
			$this->Aluno->id = $this->params->named['aluno_id'];
			if (!$this->Aluno->exists()) {
				throw new NotFoundException(__('Invalid aluno'));
			}
			$alunoRespostas = $this->Aluno->AlunoResposta->find('all', array(
				'conditions' => array('aluno_id' => $this->params->named['aluno_id']),
				'contain' => array('Resposta' => array('Pergunta')),
			));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			$this->Aluno->id = $this->params->named['aluno_id'];
			if (!isset($this->params->named['ano'])) {
				$this->redirect(array('action' => 'passo_dois', 'aluno_id' => $this->Aluno->id, 'ano' => $this->request->data[$this->modelClass]['ano_questionario_id']));
			}
			$this->Aluno->AlunoResposta->deleteAll(array('aluno_id' => $this->Aluno->id));
			if ($this->Aluno->saveAssociated($this->request->data)) {
				$this->Session->setFlash(__('Dados da identificação do estudante salvos'), 'flash_success');
				$this->redirect(array('action' => 'passo_tres', 'aluno_id' => $this->Aluno->id));
			} else {
				$this->Session->setFlash(__('Os dados não foram salvos, tente novamente'), 'flash_failure');
			}
		} else {
			$this->request->data = $this->Aluno->read(null, $this->params->named['aluno_id']);
		}
		$perguntas = $this->Aluno->AlunoResposta->Resposta->Pergunta->find('all', array('conditions' => array('Pergunta.ano_questionario_id' => $this->params->named['ano']), 'order' => array('Pergunta.id')));
		$this->set(compact('perguntas', 'alunoRespostas'));
	}

/**
 * passo_tres method
 *
 * @return void
 */
	public function passo_tres() {
		if (!isset($this->params->named['familiares'])) {
			$this->render('/Elements/familiares');
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if (!isset($this->params->named['familiares'])) {
				$this->redirect(array('action' => 'passo_tres', 'aluno_id' => $this->params->named['aluno_id'], 'familiares' => $this->request->data[$this->modelClass]['qtdFamiliares']));
			}
			$this->Aluno->id = $this->request->data('Aluno.id');
			$this->Aluno->Familiar->deleteAll(array('aluno_id' => $this->Aluno->id));
			if ($this->Aluno->saveAssociated($this->request->data, array('atomic' => true, 'validate' => 'first'))) {
				$this->Session->setFlash(__('Cadastro do aluno salvo.'), 'flash_success');
				$this->redirect(array('action' => 'view', $this->Aluno->id));
			} else {
				$this->Session->setFlash(__('Os dados não foram salvos, tente novamente'), 'flash_failure');
			}
		} else {
			$this->request->data = $this->Aluno->read(null, $this->params->named['aluno_id']);
		}
	}

}

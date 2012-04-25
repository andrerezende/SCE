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
				$this->Session->setFlash(__('The pergunta has been saved'), 'flash_success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The pergunta could not be saved. Please, try again.'), 'flash_failure');
			}
		}
		$anoQuestionarios = $this->Pergunta->AnoQuestionario->find('list', array('order' => 'AnoQuestionario.descricao DESC'));
		$padrao = $this->Pergunta->AnoQuestionario->find('first', array(
			'fields' => 'AnoQuestionario.id',
			'order' => 'AnoQuestionario.descricao DESC',
			'contain' => array(),
			'conditions' => array('default' => true)
		));
		$this->set(compact('anoQuestionarios', 'padrao'));
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
				$this->Session->setFlash(__('The pergunta has been saved'), 'flash_success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The pergunta could not be saved. Please, try again.'), 'flash_failure');
			}
		} else {
			$this->request->data = $this->Pergunta->read(null, $id);
		}
		$anoQuestionarios = $this->Pergunta->AnoQuestionario->find('list', array('order' => 'AnoQuestionario.descricao DESC'));
		$padrao = $this->Pergunta->AnoQuestionario->find('first', array(
			'fields' => 'AnoQuestionario.id',
			'order' => 'AnoQuestionario.descricao DESC',
			'contain' => array(),
			'conditions' => array('default' => true)
		));
		$this->set(compact('anoQuestionarios', 'padrao'));
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
			$this->Session->setFlash(__('Pergunta deleted'), 'flash_success');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Pergunta was not deleted'), 'flash_failure');
		$this->redirect(array('action' => 'index'));
	}

/**
 * get_perguntas_by_ano method
 *
 * @access public
 * @return void
 */
	public function get_perguntas_by_ano() {
		if ($this->request->is('ajax')) {
			Configure::write('debug', 0);
			$this->disableCache();
			$this->autoRender = false;
			$this->layout = 'ajax';

			return json_encode($this->Pergunta->find('list', array(
				'contain' => array(),
				'conditions' => array('ano_questionario_id' => $this->request->data['AnoQuestionario']['id'])
			)));
		}
	}

}

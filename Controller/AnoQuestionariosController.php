<?php
App::uses('AppController', 'Controller');
/**
 * AnoQuestionarios Controller
 *
 * @property AnoQuestionario $AnoQuestionario
 */
class AnoQuestionariosController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->AnoQuestionario->recursive = 0;
		$this->paginate = array(
			'AnoQuestionario' => array(
				'order' => 'AnoQuestionario.id'
			)
		);
		$this->set('anoQuestionarios', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->AnoQuestionario->id = $id;
		if (!$this->AnoQuestionario->exists()) {
			throw new NotFoundException(__('Ano questionario inválido'));
		}
		$this->set('anoQuestionario', $this->AnoQuestionario->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->AnoQuestionario->create();
			if ($this->AnoQuestionario->save($this->request->data)) {
				$this->Session->setFlash(__('O ano questionario foi salvo.'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('O ano questionario não pode ser salvo. Por favor, tente novamente.'));
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
		$this->AnoQuestionario->id = $id;
		if (!$this->AnoQuestionario->exists()) {
			throw new NotFoundException(__('Ano questionario inválido.'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->AnoQuestionario->save($this->request->data)) {
				$this->Session->setFlash(__('O ano questionario foi salvo.'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('O ano questionario não pode ser salvo. Por favor, tente novamente.'));
			}
		} else {
			$this->request->data = $this->AnoQuestionario->read(null, $id);
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
		$this->AnoQuestionario->id = $id;
		if (!$this->AnoQuestionario->exists()) {
			throw new NotFoundException(__('ano questionario inválido.'));
		}
		if ($this->AnoQuestionario->delete()) {
			$this->Session->setFlash(__('Ano questionario excluído.'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Ano questionario não pode ser excluído.'));
		$this->redirect(array('action' => 'index'));
	}
}

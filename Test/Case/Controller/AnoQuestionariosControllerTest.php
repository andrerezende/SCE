<?php
App::uses('AnoQuestionariosController', 'Controller');

/**
 * TestAnoQuestionariosController *
 */
class TestAnoQuestionariosController extends AnoQuestionariosController {
/**
 * Auto render
 *
 * @var boolean
 */
	public $autoRender = false;

/**
 * Redirect action
 *
 * @param mixed $url
 * @param mixed $status
 * @param boolean $exit
 * @return void
 */
	public function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

/**
 * AnoQuestionariosController Test Case
 *
 */
class AnoQuestionariosControllerTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.ano_questionario', 'app.pergunta', 'app.resposta', 'app.aluno_resposta', 'app.aluno', 'app.curso', 'app.campus', 'app.modalidade_curso', 'app.turno', 'app.regime_curso', 'app.familiar');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->AnoQuestionarios = new TestAnoQuestionariosController();
		$this->AnoQuestionarios->constructClasses();
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->AnoQuestionarios);

		parent::tearDown();
	}

/**
 * testIndex method
 *
 * @return void
 */
	public function testIndex() {

	}
/**
 * testView method
 *
 * @return void
 */
	public function testView() {

	}
/**
 * testAdd method
 *
 * @return void
 */
	public function testAdd() {

	}
/**
 * testEdit method
 *
 * @return void
 */
	public function testEdit() {

	}
/**
 * testDelete method
 *
 * @return void
 */
	public function testDelete() {

	}
}
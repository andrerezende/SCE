<?php
App::uses('AnoQuestionario', 'Model');

/**
 * AnoQuestionario Test Case
 *
 */
class AnoQuestionarioTestCase extends CakeTestCase {
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
		$this->AnoQuestionario = ClassRegistry::init('AnoQuestionario');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->AnoQuestionario);

		parent::tearDown();
	}

}
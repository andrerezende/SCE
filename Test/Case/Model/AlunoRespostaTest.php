<?php
App::uses('AlunoResposta', 'Model');

/**
 * AlunoResposta Test Case
 *
 */
class AlunoRespostaTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.aluno_resposta', 'app.aluno', 'app.resposta', 'app.pergunta');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->AlunoResposta = ClassRegistry::init('AlunoResposta');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->AlunoResposta);

		parent::tearDown();
	}

}

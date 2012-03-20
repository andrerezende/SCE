<?php
App::uses('Resposta', 'Model');

/**
 * Resposta Test Case
 *
 */
class RespostaTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.resposta', 'app.pergunta', 'app.aluno', 'app.aluno_resposta');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Resposta = ClassRegistry::init('Resposta');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Resposta);

		parent::tearDown();
	}

}

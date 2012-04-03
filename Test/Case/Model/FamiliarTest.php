<?php
App::uses('Familiar', 'Model');

/**
 * Familiar Test Case
 *
 */
class FamiliarTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.familiar', 'app.aluno', 'app.curso', 'app.campus', 'app.modalidade_curso', 'app.turno', 'app.regime_curso', 'app.aluno_resposta', 'app.resposta', 'app.pergunta');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Familiar = ClassRegistry::init('Familiar');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Familiar);

		parent::tearDown();
	}

}
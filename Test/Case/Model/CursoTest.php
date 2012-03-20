<?php
App::uses('Curso', 'Model');

/**
 * Curso Test Case
 *
 */
class CursoTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.curso', 'app.campus', 'app.modalidade', 'app.modalidade_curso', 'app.turno', 'app.regime_curso', 'app.aluno', 'app.regime');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Curso = ClassRegistry::init('Curso');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Curso);

		parent::tearDown();
	}

}

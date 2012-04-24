<?php
App::uses('ModalidadeCurso', 'Model');

/**
 * ModalidadeCurso Test Case
 *
 */
class ModalidadeCursoTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.modalidade_curso');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ModalidadeCurso = ClassRegistry::init('ModalidadeCurso');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ModalidadeCurso);

		parent::tearDown();
	}

}
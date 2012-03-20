<?php
App::uses('RegimeCurso', 'Model');

/**
 * RegimeCurso Test Case
 *
 */
class RegimeCursoTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.regime_curso', 'app.curso');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->RegimeCurso = ClassRegistry::init('RegimeCurso');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->RegimeCurso);

		parent::tearDown();
	}

}

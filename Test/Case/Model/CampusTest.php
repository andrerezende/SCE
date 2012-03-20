<?php
App::uses('Campus', 'Model');

/**
 * Campus Test Case
 *
 */
class CampusTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.campus', 'app.curso');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Campus = ClassRegistry::init('Campus');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Campus);

		parent::tearDown();
	}

}

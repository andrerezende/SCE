<?php
/**
 * PerguntaFixture
 *
 */
class PerguntaFixture extends CakeTestFixture {
/**
 * Table name
 *
 * @var string
 */
	public $table = 'pergunta';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 11, 'key' => 'primary'),
		'indexes' => array('PRIMARY' => array('unique' => true, 'column' => 'id')),
		'tableParameters' => array()
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1
		),
	);
}

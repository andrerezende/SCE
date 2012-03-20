<?php
/**
 * RespostaFixture
 *
 */
class RespostaFixture extends CakeTestFixture {
/**
 * Table name
 *
 * @var string
 */
	public $table = 'resposta';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 11, 'key' => 'primary'),
		'pergunta_id' => array('type' => 'integer', 'null' => true),
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
			'id' => 1,
			'pergunta_id' => 1
		),
	);
}

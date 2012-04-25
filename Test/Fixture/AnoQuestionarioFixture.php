?>
<?php
/**
 * AnoQuestionarioFixture
 *
 */
class AnoQuestionarioFixture extends CakeTestFixture {
/**
 * Table name
 *
 * @var string
 */
	public $table = 'ano_questionario';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'length' => 11, 'key' => 'primary'),
		'descricao' => array('type' => 'string', 'null' => true, 'length' => 10),
		'default' => array('type' => 'boolean', 'null' => true),
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
			'descricao' => 'Lorem ip',
			'default' => 1
		),
	);
}
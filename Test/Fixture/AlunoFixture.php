<?php
/**
 * AlunoFixture
 *
 */
class AlunoFixture extends CakeTestFixture {
/**
 * Table name
 *
 * @var string
 */
	public $table = 'aluno';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 11, 'key' => 'primary'),
		'curso_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
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
			'curso_id' => 1
		),
	);
}

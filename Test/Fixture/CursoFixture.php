<?php
/**
 * CursoFixture
 *
 */
class CursoFixture extends CakeTestFixture {
/**
 * Table name
 *
 * @var string
 */
	public $table = 'curso';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 11, 'key' => 'primary'),
		'campus_id' => array('type' => 'integer', 'null' => true),
		'modalidade_id' => array('type' => 'integer', 'null' => true),
		'turno_id' => array('type' => 'integer', 'null' => true),
		'regime_curso_id' => array('type' => 'integer', 'null' => true),
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
			'campus_id' => 1,
			'modalidade_id' => 1,
			'turno_id' => 1,
			'regime_curso_id' => 1
		),
	);
}

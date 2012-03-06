<?php
/**
 * AlunoRespostaFixture
 *
 */
class AlunoRespostaFixture extends CakeTestFixture {
/**
 * Table name
 *
 * @var string
 */
	public $table = 'aluno_resposta';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 11, 'key' => 'primary'),
		'aluno_id' => array('type' => 'integer', 'null' => true),
		'resposta_id' => array('type' => 'integer', 'null' => true),
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
			'aluno_id' => 1,
			'resposta_id' => 1
		),
	);
}

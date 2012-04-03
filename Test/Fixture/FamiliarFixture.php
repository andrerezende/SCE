?>
<?php
/**
 * FamiliarFixture
 *
 */
class FamiliarFixture extends CakeTestFixture {
/**
 * Table name
 *
 * @var string
 */
	public $table = 'familiar';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 11, 'key' => 'primary'),
		'aluno_id' => array('type' => 'integer', 'null' => false),
		'nome' => array('type' => 'string', 'null' => false),
		'grau_parentesco' => array('type' => 'string', 'null' => true, 'length' => 100),
		'idade' => array('type' => 'integer', 'null' => true),
		'escolaridade' => array('type' => 'string', 'null' => true, 'length' => 100),
		'ocupacao' => array('type' => 'string', 'null' => true, 'length' => 150),
		'local_trabalho' => array('type' => 'string', 'null' => true, 'length' => 150),
		'renda' => array('type' => 'float', 'null' => true),
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
			'nome' => 'Lorem ipsum dolor sit amet',
			'grau_parentesco' => 'Lorem ipsum dolor sit amet',
			'idade' => 1,
			'escolaridade' => 'Lorem ipsum dolor sit amet',
			'ocupacao' => 'Lorem ipsum dolor sit amet',
			'local_trabalho' => 'Lorem ipsum dolor sit amet',
			'renda' => 1
		),
	);
}
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
		'nome' => array('type' => 'string', 'null' => false),
		'matricula' => array('type' => 'string', 'null' => false, 'length' => 100),
		'rg' => array('type' => 'string', 'null' => false, 'length' => 20),
		'orgao_expedidor' => array('type' => 'string', 'null' => true, 'length' => 10),
		'cpf' => array('type' => 'string', 'null' => true, 'length' => 20),
		'sexo' => array('type' => 'string', 'null' => false, 'length' => 9),
		'estado_civil' => array('type' => 'string', 'null' => true, 'length' => 20),
		'data_nascimento' => array('type' => 'date', 'null' => false),
		'endereco' => array('type' => 'string', 'null' => true),
		'telefone' => array('type' => 'string', 'null' => true, 'length' => 10),
		'celular' => array('type' => 'string', 'null' => true, 'length' => 20),
		'cep' => array('type' => 'string', 'null' => true, 'length' => 8),
		'cidade_estado' => array('type' => 'string', 'null' => true, 'length' => 100),
		'ponto_referencia' => array('type' => 'string', 'null' => true, 'length' => 100),
		'etnia' => array('type' => 'string', 'null' => true, 'length' => 15),
		'religiao' => array('type' => 'string', 'null' => true, 'length' => 20),
		'necessidade_especial' => array('type' => 'string', 'null' => true, 'length' => 50),
		'doenca_hereditaria' => array('type' => 'boolean', 'null' => true),
		'remedio_controlado' => array('type' => 'boolean', 'null' => true),
		'tipo_sanguineo' => array('type' => 'string', 'null' => true, 'length' => 5),
		'fator_rh' => array('type' => 'boolean', 'null' => true),
		'faixa_etaria' => array('type' => 'integer', 'null' => true),
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
			'curso_id' => 1,
			'nome' => 'Lorem ipsum dolor sit amet',
			'matricula' => 'Lorem ipsum dolor sit amet',
			'rg' => 'Lorem ipsum dolor ',
			'orgao_expedidor' => 'Lorem ip',
			'cpf' => 'Lorem ipsum dolor ',
			'sexo' => 'Lorem i',
			'estado_civil' => 'Lorem ipsum dolor ',
			'data_nascimento' => '2012-03-07',
			'endereco' => 'Lorem ipsum dolor sit amet',
			'telefone' => 'Lorem ip',
			'celular' => 'Lorem ipsum dolor ',
			'cep' => 'Lorem ',
			'cidade_estado' => 'Lorem ipsum dolor sit amet',
			'ponto_referencia' => 'Lorem ipsum dolor sit amet',
			'etnia' => 'Lorem ipsum d',
			'religiao' => 'Lorem ipsum dolor ',
			'necessidade_especial' => 'Lorem ipsum dolor sit amet',
			'doenca_hereditaria' => 1,
			'remedio_controlado' => 1,
			'tipo_sanguineo' => 'Lor',
			'fator_rh' => 1,
			'faixa_etaria' => 1
		),
	);
}

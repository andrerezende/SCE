<?php
App::uses('Usuario', 'Model');
App::uses('Aluno', 'Model');

// Setup a 'default' cache configuration for use in the application.
Cache::config('default', array('engine' => 'File', 'mask' => '0777'));

/**
 * The settings below can be used to set additional paths to models, views and controllers.
 *
 * App::build(array(
 *     'Plugin' => array('/full/path/to/plugins/', '/next/full/path/to/plugins/'),
 *     'Model' =>  array('/full/path/to/models/', '/next/full/path/to/models/'),
 *     'View' => array('/full/path/to/views/', '/next/full/path/to/views/'),
 *     'Controller' => array('/full/path/to/controllers/', '/next/full/path/to/controllers/'),
 *     'Model/Datasource' => array('/full/path/to/datasources/', '/next/full/path/to/datasources/'),
 *     'Model/Behavior' => array('/full/path/to/behaviors/', '/next/full/path/to/behaviors/'),
 *     'Controller/Component' => array('/full/path/to/components/', '/next/full/path/to/components/'),
 *     'View/Helper' => array('/full/path/to/helpers/', '/next/full/path/to/helpers/'),
 *     'Vendor' => array('/full/path/to/vendors/', '/next/full/path/to/vendors/'),
 *     'Console/Command' => array('/full/path/to/shells/', '/next/full/path/to/shells/'),
 *     'Locale' => array('/full/path/to/locale/', '/next/full/path/to/locale/')
 * ));
 *
 */

/**
 * Custom Inflector rules, can be set to correctly pluralize or singularize table, model, controller names or whatever other
 * string is passed to the inflection functions
 *
 * Inflector::rules('singular', array('rules' => array(), 'irregular' => array(), 'uninflected' => array()));
 * Inflector::rules('plural', array('rules' => array(), 'irregular' => array(), 'uninflected' => array()));
 *
 */

/**
 * Plugins need to be loaded manually, you can either load them one by one or all of them in a single call
 * Uncomment one of the lines below, as you need. make sure you read the documentation on CakePlugin to use more
 * advanced ways of loading plugins
 *
 * CakePlugin::loadAll(); // Loads all plugins at once
 * CakePlugin::load('DebugKit'); //Loads a single plugin named DebugKit
 *
 */
CakePlugin::loadAll(array(
	'CakePtbr' => array('bootstrap' => true),
));

Configure::write('Usuario.perfis', array(
	Usuario::PERFIL_ADMIN => 'Administrador',
	Usuario::PERFIL_COMUM => 'Comum',
));

Configure::write('Aluno.faixa_etaria', array(
	Aluno::FAIXA_ETARIA_13_15 => 'De 13 a 15 anos',
	Aluno::FAIXA_ETARIA_16_18 => 'De 16 a 18 anos',
	Aluno::FAIXA_ETARIA_19_21 => 'De 19 a 21 anos',
	Aluno::FAIXA_ETARIA_22_26 => 'De 22 a 26 anos',
	Aluno::FAIXA_ETARIA_27_31 => 'De 27 a 31 anos',
	Aluno::FAIXA_ETARIA_32_36 => 'De 32 a 36 anos',
	Aluno::FAIXA_ETARIA_37_41 => 'De 37 a 41 anos',
	Aluno::FAIXA_ETARIA_42_46 => 'De 42 a 46 anos',
	Aluno::FAIXA_ETARIA_47_MORE => 'A partir de 47 anos',
));

Configure::write('Aluno.etnia', array(
	'Negra' => 'Negra',
	'Branca' => 'Branca',
	'Indígena' => 'Indígena',
	'Outra' => 'Outra',
));

Configure::write('Aluno.sexo', array(
	Aluno::SEXO_M => 'Masculino',
	Aluno::SEXO_F => 'Feminino',
));

Configure::write('Aluno.fator_rh', array(
	Aluno::FATOR_RH_P => 'Positivo',
	Aluno::FATOR_RH_N => 'Negativo',
));

Configure::write('Aluno.estado_civil', array(
	'Solteiro(a)' => 'Solteiro(a)',
	'Casado(a)' => 'Casado(a)',
	'Divorciado' => 'Divorciado',
	'Desquitado' => 'Desquitado',
	'Viúvo(a)' => 'Viúvo(a)',
));

Configure::write('Aluno.tipo_sanguineo', array(
	'A' => 'A',
	'B' => 'B',
	'AB' => 'AB',
	'O' => 'O',
));

Configure::write('Aluno.necessidade_especial', array(
	'Não' => 'Não',
	'Visual - cegueira' => 'Visual - cegueira',
	'Visual - baixa visão' => 'Visual - baixa visão',
	'Motora' => 'Motora',
	'Auditiva' => 'Auditiva',
	'Múltiplas' => 'Múltiplas',
	'Outra' => 'Outra',
));

Configure::write('Aluno.religiao', array(
	'Adventismo' => 'Adventismo',
	'Budismo' => 'Budismo',
	'Catolicismo' => 'Catolicismo',
	'Cristianismo oriental' => 'Cristianismo oriental',
	'Espiritismo' => 'Espiritismo',
	'Islamismo' => 'Islamismo',
	'Judaísmo' => 'Judaísmo',
	'Mormonismo' => 'Mormonismo',
	'Neopaganismo' => 'Neopaganismo',
	'Protestantismo' => 'Protestantismo',
	'Religiões afro-brasileiras e indígenas' => 'Religiões afro-brasileiras e indígenas',
	'Religiões hoasqueiras' => 'Religiões hoasqueiras',
	'Testemunhas de Jeová' => 'Testemunhas de Jeová',
	'Outra' => 'Outra',
));
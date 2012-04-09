<?php
App::uses('Usuario', 'Model');
App::uses('Aluno', 'Model');


/**
 * Cache configuration.
 *
 * Try apc or memcache, default to the namespaceFile cache.
 */
$cacheEngine = 'File';
switch(true){
	case function_exists('apc_cache_info') && ini_get('apc.enabled'):
		$cacheEngine = 'Apc';
		break;
	case function_exists('xcache_info'):
		$cacheEngine = 'Xcache';
		break;
	case class_exists('Memcache'):
		$cacheEngine = 'Memcache';
		break;
	default:
		break;
}
Configure::write('Cache.engine', $cacheEngine);

Cache::config('_cake_core_', array('engine' => $cacheEngine, 'mask' => 0664));
Cache::config('_cake_model_', array('engine' => $cacheEngine, 'mask' => 0664));
Cache::config('default', array('engine' => $cacheEngine, 'mask' => 0644));

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
	'Divorciado(a)' => 'Divorciado(a)',
	'Desquitado(a)' => 'Desquitado(a)',
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
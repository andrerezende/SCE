<?php
App::uses('Model', 'Model');

/**
 * Application model for Cake.
 *
 * Add your application-wide methods in the class below, your models
 * will inherit them.
 *
 * @package       app.Model
 */
class AppModel extends Model {

/**
 * List of behaviors to load when the model object is initialized.
 *
 * @var array
 */
	public $actsAs = array('Containable');

	public function find($type, $options = array()) {
		switch ($type) {
			case 'superlist':
				if (!isset($options['fields']) || count($options['fields']) < 3) {
					return parent::find('list', $options);
				}

				if (!isset($options['separator'])) {
					$options['separator'] = ' ';
				}

				$list = parent::find('all', $options);

				for($i = 1; $i <= 2; $i++) {
					$field[$i] = $options['fields'][$i];
				}

				return Set::combine(
						$list,
						'{n}.'.$this->alias . '.' . $this->primaryKey,
						array(
							'%s' . $options['separator'] . '%s',
							'{n}.' . $field[1],
							'{n}.' . $field[2]
						),
						'{n}.' . $options['fields'][3]
				);
				break;

			default:
				return parent::find($type, $options);
				break;
		}
	}

}
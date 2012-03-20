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

}
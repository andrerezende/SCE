<?php
App::uses('AppHelper', 'View/Helper');
/**
 * UtilHelper
 *
 * @author Vitor Pacheco <vitor.pacheco@ifbaiano.edu.br>
 */
class UtilHelper extends AppHelper {

	public $helpers = array(
		'Html',
	);

	public function ativo($ativo) {
		if ($ativo == true) {
			return $this->Html->tag('span', 'Sim', array('class' => 'label label-success'));
		} else {
			return $this->Html->tag('span', 'Não', array('class' => 'label label-important'));
		}
	}

}
<div class="span9">
<?php echo $this->Form->create('Usuario');?>
	<fieldset>
		<legend><?php echo __('Add Usuario'); ?></legend>
	<?php
	echo $this->Form->input('nome');
	echo $this->Form->input('login');
	echo $this->Form->input('senha', array('type' => 'password'));
	echo $this->Form->input('ativo');
	echo $this->Form->input('perfil', array('options' => Configure::read('Usuario.perfis')));
	echo $this->Form->input('campus_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
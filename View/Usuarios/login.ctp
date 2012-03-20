<div class="usuarios form">
<?php echo $this->Form->create('Usuario');?>
	<fieldset>
		<legend><?php echo __('Login'); ?></legend>
	<?php
	echo $this->Form->input('login');
	echo $this->Form->input('senha', array('type' => 'password'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Login'));?>
</div>
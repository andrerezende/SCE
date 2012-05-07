<div class="span9">
<?php echo $this->Form->create('Usuario');?>
	<fieldset>
		<legend><?php echo __('Alterar senha'); ?></legend>
	<?php
	echo $this->Form->input('senha', array('type' => 'password'));
	echo $this->Form->input('confirma_senha', array('type' => 'password'));
	?>
	</fieldset>
<?php echo $this->Form->end('Enviar');?>
</div>

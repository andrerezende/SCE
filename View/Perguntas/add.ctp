<div class="perguntas form">
<?php echo $this->Form->create('Pergunta');?>
	<fieldset>
		<legend><?php echo __('Add Pergunta'); ?></legend>
	<?php
	echo $this->Form->input('descricao');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>

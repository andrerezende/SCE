<div class="span9">
<?php echo $this->Form->create('Pergunta');?>
	<fieldset>
		<legend><?php echo __('Edit Pergunta'); ?></legend>
	<?php
	echo $this->Form->input('id');
	echo $this->Form->input('ano_questionario_id');
	echo $this->Form->input('descricao', array('label' => 'Descrição', 'type' => 'textarea'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>

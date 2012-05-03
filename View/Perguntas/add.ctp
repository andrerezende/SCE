<div class="span9">
<?php echo $this->Form->create('Pergunta');?>
	<fieldset>
		<legend><?php echo __('Add Pergunta'); ?></legend>
	<?php
	echo $this->Form->input('ano_questionario_id', array('value' => $padrao['AnoQuestionario']['id']));
	echo $this->Form->input('descricao', array('label' => 'Descrição', 'type' => 'textarea'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>

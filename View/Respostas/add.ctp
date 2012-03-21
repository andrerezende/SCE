<div class="respostas form">
<?php echo $this->Form->create('Resposta');?>
	<fieldset>
		<legend><?php echo __('Add Resposta'); ?></legend>
	<?php
	if (isset($this->params->named['pergunta_id'])) {
		echo $this->Form->input('pergunta_id', array('value' => $this->params->named['pergunta_id']));
	} else {
		echo $this->Form->input('pergunta_id', array('empty' => 'Selecione'));
	}
	echo $this->Form->input('descricao', array('label' => 'Descrição'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
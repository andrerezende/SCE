<div class="respostas form">
<?php echo $this->Form->create('Resposta');?>
	<fieldset>
		<legend><?php echo __('Edit Resposta'); ?></legend>
	<?php
	echo $this->Form->input('id');
	echo $this->Form->input('pergunta_id');
	echo $this->Form->input('Aluno');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
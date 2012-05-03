<div class="span9">
<?php echo $this->Form->create('AlunoResposta');?>
	<fieldset>
		<legend><?php echo __('Edit Aluno Resposta'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('aluno_id');
		echo $this->Form->input('resposta_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="span9">
<?php echo $this->Form->create('AlunoResposta');?>
	<fieldset>
		<legend><?php echo __('Add Aluno Resposta'); ?></legend>
	<?php
		echo $this->Form->input('aluno_id');
		echo $this->Form->input('resposta_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
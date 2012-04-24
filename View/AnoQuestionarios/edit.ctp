<div class="anoQuestionarios form">
<?php echo $this->Form->create('AnoQuestionario');?>
	<fieldset>
		<legend><?php echo __('Editar Ano Questionario'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('descricao');
		echo $this->Form->input('default');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Enviar', true));?>
</div>

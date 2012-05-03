<div class="span9">
<?php echo $this->Form->create('ModalidadeCurso');?>
	<fieldset>
		<legend><?php echo __('Add Modalidade Curso'); ?></legend>
	<?php
	echo $this->Form->input('descricao');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>

<div class="modalidadeCursos form">
<?php echo $this->Form->create('ModalidadeCurso');?>
	<fieldset>
		<legend><?php echo __('Edit Modalidade Curso'); ?></legend>
	<?php
	echo $this->Form->input('id');
	echo $this->Form->input('descricao');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
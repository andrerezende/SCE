<div class="cursos form">
<?php echo $this->Form->create('Curso');?>
	<fieldset>
		<legend><?php echo __('Add Curso'); ?></legend>
	<?php
	echo $this->Form->input('campus_id', array('empty' => 'Selecione'));
	echo $this->Form->input('modalidade_id', array('options' => $modalidadeCursos, 'empty' => 'Selecione'));
	echo $this->Form->input('turno_id', array('empty' => 'Selecione'));
	echo $this->Form->input('nome');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>

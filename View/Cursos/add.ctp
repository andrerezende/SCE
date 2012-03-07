<div class="cursos form">
<?php echo $this->Form->create('Curso');?>
	<fieldset>
		<legend><?php echo __('Add Curso'); ?></legend>
	<?php
		echo $this->Form->input('campus_id');
		echo $this->Form->input('modalidade_id');
		echo $this->Form->input('turno_id');
		echo $this->Form->input('regime_curso_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="regimeCursos form">
<?php echo $this->Form->create('RegimeCurso');?>
	<fieldset>
		<legend><?php echo __('Edit Regime Curso'); ?></legend>
	<?php
	echo $this->Form->input('id');
	echo $this->Form->input('descricao', array('label' => 'Descrição'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
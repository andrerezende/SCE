<div class="modalidadeCursos form">
<?php echo $this->Form->create('ModalidadeCurso');?>
	<fieldset>
		<legend><?php echo __('Add Modalidade Curso'); ?></legend>
	<?php
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Modalidade Cursos'), array('action' => 'index'));?></li>
	</ul>
</div>

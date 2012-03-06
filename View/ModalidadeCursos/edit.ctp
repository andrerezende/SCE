<div class="modalidadeCursos form">
<?php echo $this->Form->create('ModalidadeCurso');?>
	<fieldset>
		<legend><?php echo __('Edit Modalidade Curso'); ?></legend>
	<?php
		echo $this->Form->input('id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('ModalidadeCurso.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('ModalidadeCurso.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Modalidade Cursos'), array('action' => 'index'));?></li>
	</ul>
</div>

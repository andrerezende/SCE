<div class="turnos form">
<?php echo $this->Form->create('Turno');?>
	<fieldset>
		<legend><?php echo __('Edit Turno'); ?></legend>
	<?php
		echo $this->Form->input('id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Turno.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Turno.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Turnos'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Cursos'), array('controller' => 'cursos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Curso'), array('controller' => 'cursos', 'action' => 'add')); ?> </li>
	</ul>
</div>

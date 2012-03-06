<div class="regimeCursos form">
<?php echo $this->Form->create('RegimeCurso');?>
	<fieldset>
		<legend><?php echo __('Edit Regime Curso'); ?></legend>
	<?php
		echo $this->Form->input('id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('RegimeCurso.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('RegimeCurso.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Regime Cursos'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Cursos'), array('controller' => 'cursos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Curso'), array('controller' => 'cursos', 'action' => 'add')); ?> </li>
	</ul>
</div>

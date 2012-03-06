<div class="campus form">
<?php echo $this->Form->create('Campus');?>
	<fieldset>
		<legend><?php echo __('Edit Campus'); ?></legend>
	<?php
		echo $this->Form->input('id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Campus.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Campus.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Campus'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Cursos'), array('controller' => 'cursos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Curso'), array('controller' => 'cursos', 'action' => 'add')); ?> </li>
	</ul>
</div>

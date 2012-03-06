<div class="alunos form">
<?php echo $this->Form->create('Aluno');?>
	<fieldset>
		<legend><?php echo __('Edit Aluno'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('curso_id');
		echo $this->Form->input('Resposta');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Aluno.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Aluno.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Alunos'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Cursos'), array('controller' => 'cursos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Curso'), array('controller' => 'cursos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Respostas'), array('controller' => 'respostas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Resposta'), array('controller' => 'respostas', 'action' => 'add')); ?> </li>
	</ul>
</div>

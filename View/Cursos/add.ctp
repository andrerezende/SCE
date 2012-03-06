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
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Cursos'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Campus'), array('controller' => 'campus', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Campus'), array('controller' => 'campus', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Modalidade Cursos'), array('controller' => 'modalidade_cursos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Modalidade Curso'), array('controller' => 'modalidade_cursos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Turnos'), array('controller' => 'turnos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Turno'), array('controller' => 'turnos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Regime Cursos'), array('controller' => 'regime_cursos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Regime Curso'), array('controller' => 'regime_cursos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Alunos'), array('controller' => 'alunos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Aluno'), array('controller' => 'alunos', 'action' => 'add')); ?> </li>
	</ul>
</div>

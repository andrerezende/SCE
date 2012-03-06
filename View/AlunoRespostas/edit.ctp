<div class="alunoRespostas form">
<?php echo $this->Form->create('AlunoResposta');?>
	<fieldset>
		<legend><?php echo __('Edit Aluno Resposta'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('aluno_id');
		echo $this->Form->input('resposta_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('AlunoResposta.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('AlunoResposta.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Aluno Respostas'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Alunos'), array('controller' => 'alunos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Aluno'), array('controller' => 'alunos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Respostas'), array('controller' => 'respostas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Resposta'), array('controller' => 'respostas', 'action' => 'add')); ?> </li>
	</ul>
</div>

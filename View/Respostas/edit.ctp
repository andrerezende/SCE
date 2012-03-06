<div class="respostas form">
<?php echo $this->Form->create('Resposta');?>
	<fieldset>
		<legend><?php echo __('Edit Resposta'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('pergunta_id');
		echo $this->Form->input('Aluno');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Resposta.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Resposta.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Respostas'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Perguntas'), array('controller' => 'perguntas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pergunta'), array('controller' => 'perguntas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Alunos'), array('controller' => 'alunos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Aluno'), array('controller' => 'alunos', 'action' => 'add')); ?> </li>
	</ul>
</div>

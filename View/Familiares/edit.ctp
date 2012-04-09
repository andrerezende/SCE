<div class="familiares form">
<?php echo $this->Form->create('Familiar');?>
	<fieldset>
		<legend><?php echo __('Editar Familiar'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('aluno_id');
		echo $this->Form->input('nome');
		echo $this->Form->input('grau_parentesco');
		echo $this->Form->input('idade');
		echo $this->Form->input('escolaridade');
		echo $this->Form->input('ocupacao');
		echo $this->Form->input('local_trabalho');
		echo $this->Form->input('renda');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Enviar', true));?>
</div>
<div class="actions">
	<h3><?php echo __('Ações'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Excluir'), array('action' => 'delete', $this->Form->value('Familiar.id')), null, __(Você tem certeza que deseja excluir o # %s?', $this->Form->value('Familiar.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Listar Familiares'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('Listar Alunos'), array('controller' => 'alunos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Novo Aluno'), array('controller' => 'alunos', 'action' => 'add')); ?> </li>
	</ul>
</div>
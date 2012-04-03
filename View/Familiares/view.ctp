<div class="familiares view">
<h2><?php  echo __('Familiar');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($familiar['Familiar']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Aluno'); ?></dt>
		<dd>
			<?php echo $this->Html->link($familiar['Aluno']['nome'], array('controller' => 'alunos', 'action' => 'view', $familiar['Aluno']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nome'); ?></dt>
		<dd>
			<?php echo h($familiar['Familiar']['nome']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Grau Parentesco'); ?></dt>
		<dd>
			<?php echo h($familiar['Familiar']['grau_parentesco']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Idade'); ?></dt>
		<dd>
			<?php echo h($familiar['Familiar']['idade']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Escolaridade'); ?></dt>
		<dd>
			<?php echo h($familiar['Familiar']['escolaridade']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ocupação'); ?></dt>
		<dd>
			<?php echo h($familiar['Familiar']['ocupacao']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Local Trabalho'); ?></dt>
		<dd>
			<?php echo h($familiar['Familiar']['local_trabalho']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Renda'); ?></dt>
		<dd>
			<?php echo h($familiar['Familiar']['renda']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Ações'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar Familiar'), array('action' => 'edit', $familiar['Familiar']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Excluir Familiar'), array('action' => 'delete', $familiar['Familiar']['id']), null, __('Você tem certeza que deseja excluir o # %s?', $familiar['Familiar']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Familiares'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Novo Familiar'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Alunos'), array('controller' => 'alunos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Novo Aluno'), array('controller' => 'alunos', 'action' => 'add')); ?> </li>
	</ul>
</div>

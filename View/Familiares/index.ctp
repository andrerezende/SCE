<div class="familiares index">
	<h2><?php echo __('Familiares');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('aluno_id');?></th>
			<th><?php echo $this->Paginator->sort('nome');?></th>
			<th><?php echo $this->Paginator->sort('grau_parentesco');?></th>
			<th><?php echo $this->Paginator->sort('idade');?></th>
			<th><?php echo $this->Paginator->sort('escolaridade');?></th>
			<th><?php echo $this->Paginator->sort('ocupacao');?></th>
			<th><?php echo $this->Paginator->sort('local_trabalho');?></th>
			<th><?php echo $this->Paginator->sort('renda');?></th>
			<th class="actions"><?php echo __('Ações');?></th>
	</tr>
	<?php
	foreach ($familiares as $familiar): ?>
	<tr>
	<tr<?php echo $class;?>>
		<td><?php echo h($familiar['Familiar']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($familiar['Aluno']['nome'], array('controller' => 'alunos', 'action' => 'view', $familiar['Aluno']['id'])); ?>
		</td>
		<td><?php echo h($familiar['Familiar']['nome']); ?>&nbsp;</td>
		<td><?php echo h($familiar['Familiar']['grau_parentesco']); ?>&nbsp;</td>
		<td><?php echo h($familiar['Familiar']['idade']); ?>&nbsp;</td>
		<td><?php echo h($familiar['Familiar']['escolaridade']); ?>&nbsp;</td>
		<td><?php echo h($familiar['Familiar']['ocupacao']); ?>&nbsp;</td>
		<td><?php echo h($familiar['Familiar']['local_trabalho']); ?>&nbsp;</td>
		<td><?php echo h($familiar['Familiar']['renda']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $familiar['Familiar']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $familiar['Familiar']['id'])); ?>
			<?php echo $this->Form->postLink(__('Excluir'), array('action' => 'delete', $familiar['Familiar']['id']), null, __('Você tem certeza que deseja excluir o # %s?', $familiar['Familiar']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Página {:page} de {:pages}, mostrando {:current} registros de {:count}, começando no registro {:start}, e terminando no {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('anterior'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('próxima') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Ações'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Novo Familiar'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Listar Alunos'), array('controller' => 'alunos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Novo Aluno'), array('controller' => 'alunos', 'action' => 'add')); ?> </li>
	</ul>
</div>
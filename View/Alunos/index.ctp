<div class="alunos index">
	<h2><?php echo __('Alunos');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
		<th><?php echo $this->Paginator->sort('id');?></th>
		<th><?php echo $this->Paginator->sort('curso_id');?></th>
		<th><?php echo $this->Paginator->sort('nome');?></th>
		<th><?php echo $this->Paginator->sort('matricula', 'Matrícula');?></th>
		<th><?php echo $this->Paginator->sort('cpf', 'CPF');?></th>
		<th><?php echo $this->Paginator->sort('cidade_estado', 'Cidade / Estado');?></th>
		<th><?php echo $this->Paginator->sort('necessidade_especial');?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($alunos as $aluno): ?>
	<tr>
		<td><?php echo h($aluno['Aluno']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($aluno['Curso']['nome'], array('controller' => 'cursos', 'action' => 'view', $aluno['Curso']['id'])); ?>
		</td>
		<td><?php echo h($aluno['Aluno']['nome']); ?>&nbsp;</td>
		<td><?php echo h($aluno['Aluno']['matricula']); ?>&nbsp;</td>
		<td><?php echo h($aluno['Aluno']['cpf']); ?>&nbsp;</td>
		<td><?php echo h($aluno['Aluno']['cidade_estado']); ?>&nbsp;</td>
		<td><?php echo h($aluno['Aluno']['necessidade_especial']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $aluno['Aluno']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $aluno['Aluno']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $aluno['Aluno']['id']), null, __('Are you sure you want to delete # %s?', $aluno['Aluno']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
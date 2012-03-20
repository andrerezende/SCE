<div class="alunoRespostas index">
	<h2><?php echo __('Aluno Respostas');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('aluno_id');?></th>
			<th><?php echo $this->Paginator->sort('resposta_id');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($alunoRespostas as $alunoResposta): ?>
	<tr>
		<td><?php echo h($alunoResposta['AlunoResposta']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($alunoResposta['Aluno']['id'], array('controller' => 'alunos', 'action' => 'view', $alunoResposta['Aluno']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($alunoResposta['Resposta']['id'], array('controller' => 'respostas', 'action' => 'view', $alunoResposta['Resposta']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $alunoResposta['AlunoResposta']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $alunoResposta['AlunoResposta']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $alunoResposta['AlunoResposta']['id']), null, __('Are you sure you want to delete # %s?', $alunoResposta['AlunoResposta']['id'])); ?>
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
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Aluno Resposta'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Alunos'), array('controller' => 'alunos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Aluno'), array('controller' => 'alunos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Respostas'), array('controller' => 'respostas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Resposta'), array('controller' => 'respostas', 'action' => 'add')); ?> </li>
	</ul>
</div>

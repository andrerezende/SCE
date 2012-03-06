<div class="respostas index">
	<h2><?php echo __('Respostas');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('pergunta_id');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($respostas as $resposta): ?>
	<tr>
		<td><?php echo h($resposta['Resposta']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($resposta['Pergunta']['id'], array('controller' => 'perguntas', 'action' => 'view', $resposta['Pergunta']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $resposta['Resposta']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $resposta['Resposta']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $resposta['Resposta']['id']), null, __('Are you sure you want to delete # %s?', $resposta['Resposta']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Resposta'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Perguntas'), array('controller' => 'perguntas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pergunta'), array('controller' => 'perguntas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Alunos'), array('controller' => 'alunos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Aluno'), array('controller' => 'alunos', 'action' => 'add')); ?> </li>
	</ul>
</div>

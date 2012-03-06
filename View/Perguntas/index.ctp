<div class="perguntas index">
	<h2><?php echo __('Perguntas');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($perguntas as $pergunta): ?>
	<tr>
		<td><?php echo h($pergunta['Pergunta']['id']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $pergunta['Pergunta']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $pergunta['Pergunta']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $pergunta['Pergunta']['id']), null, __('Are you sure you want to delete # %s?', $pergunta['Pergunta']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Pergunta'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Respostas'), array('controller' => 'respostas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Resposta'), array('controller' => 'respostas', 'action' => 'add')); ?> </li>
	</ul>
</div>

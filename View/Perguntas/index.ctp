<div class="span9">
	<h2><?php echo __('Perguntas');?></h2>
	<ul class="actions actions-horizontal">
		<li><?php echo $this->Html->link(__('Adicionar'), array('action' => 'add')); ?></li>
	</ul>

	<h5>Filtrar</h5>
	<?php
	echo $this->Form->create('Pergunta', array(
		'url' => array_merge(array('action' => 'index'), $this->params['pass'])
	));
	echo $this->Form->input('ano', array('div' => false, 'type' => 'select', 'options' => $anos, 'empty' => 'Todos', 'label' => false));
	echo $this->Form->submit('Pesquisar', array('div' => false));
	echo $this->Form->end();
	?>
	<table cellpadding="0" cellspacing="0">
	<tr>
		<th><?php echo $this->Paginator->sort('id');?></th>
		<th><?php echo $this->Paginator->sort('descricao', 'Descrição');?></th>
		<th><?php echo $this->Paginator->sort('ano', 'Ano');?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($perguntas as $pergunta): ?>
	<tr>
		<td><?php echo h($pergunta['Pergunta']['id']); ?>&nbsp;</td>
		<td><?php echo h($pergunta['Pergunta']['descricao']); ?>&nbsp;</td>
		<td><?php echo h($pergunta['AnoQuestionario']['descricao']); ?>&nbsp;</td>
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
<div class="span9">
	<h2><?php echo __('Respostas');?></h2>
	<ul class="actions actions-horizontal">
		<li><?php echo $this->Html->link(__('Adicionar'), array('action' => 'add')); ?></li>
	</ul>

	<h5>Filtrar</h5>
	<?php
	echo $this->Form->create('Resposta', array(
		'url' => array_merge(array('action' => 'index'), $this->params['pass'])
	));
	echo $this->Form->input('ano', array('div' => false, 'type' => 'select', 'options' => $anos, 'empty' => 'Todos', 'label' => false));
	echo $this->Form->submit('Pesquisar', array('div' => false));
	echo $this->Form->end();
	?>
	<table cellpadding="0" cellspacing="0">
	<tr>
		<th><?php echo $this->Paginator->sort('id');?></th>
		<th><?php echo $this->Paginator->sort('AnoQuestionario.descricao', 'Ano');?></th>
		<th><?php echo $this->Paginator->sort('pergunta_id');?></th>
		<th><?php echo $this->Paginator->sort('descricao', 'Descrição');?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($respostas as $resposta): ?>
	<tr>
		<td><?php echo h($resposta['Resposta']['id']); ?>&nbsp;</td>
		<td><?php echo h($resposta['Pergunta']['AnoQuestionario']['descricao']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($resposta['Pergunta']['descricao'], array('controller' => 'perguntas', 'action' => 'view', $resposta['Pergunta']['id'])); ?>
		</td>
		<td><?php echo h($resposta['Resposta']['descricao']); ?>&nbsp;</td>
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
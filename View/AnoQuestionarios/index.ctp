<div class="span9">
	<h2><?php echo __('Anos de Questionários');?></h2>
	<ul class="actions actions-horizontal">
		<li><?php echo $this->Html->link(__('Adicionar'), array('action' => 'add')); ?></li>
	</ul>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('descricao', 'Descrição');?></th>
			<th><?php echo $this->Paginator->sort('default', 'Padrão');?></th>
			<th class="actions"><?php echo __('Ações');?></th>
	</tr>
	<?php foreach ($anoQuestionarios as $anoQuestionario): ?>
	<tr>
	<tr>
		<td><?php echo h($anoQuestionario['AnoQuestionario']['id']); ?>&nbsp;</td>
		<td><?php echo h($anoQuestionario['AnoQuestionario']['descricao']); ?>&nbsp;</td>
		<td><?php echo $this->Util->ativo($anoQuestionario['AnoQuestionario']['default']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $anoQuestionario['AnoQuestionario']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $anoQuestionario['AnoQuestionario']['id'])); ?>
			<?php echo $this->Form->postLink(__('Excluir'), array('action' => 'delete', $anoQuestionario['AnoQuestionario']['id']), null, __('Você tem certeza que deseja excluir o # %s?', $anoQuestionario['AnoQuestionario']['id'])); ?>
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

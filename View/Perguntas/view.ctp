<div class="perguntas view">
<h2><?php  echo __('Pergunta');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($pergunta['Pergunta']['id']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Pergunta'), array('action' => 'edit', $pergunta['Pergunta']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Pergunta'), array('action' => 'delete', $pergunta['Pergunta']['id']), null, __('Are you sure you want to delete # %s?', $pergunta['Pergunta']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Perguntas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pergunta'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Respostas'), array('controller' => 'respostas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Resposta'), array('controller' => 'respostas', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Respostas');?></h3>
	<?php if (!empty($pergunta['Resposta'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Pergunta Id'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($pergunta['Resposta'] as $resposta): ?>
		<tr>
			<td><?php echo $resposta['id'];?></td>
			<td><?php echo $resposta['pergunta_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'respostas', 'action' => 'view', $resposta['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'respostas', 'action' => 'edit', $resposta['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'respostas', 'action' => 'delete', $resposta['id']), null, __('Are you sure you want to delete # %s?', $resposta['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Resposta'), array('controller' => 'respostas', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>

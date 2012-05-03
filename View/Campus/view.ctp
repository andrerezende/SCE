<div class="span9">
<h2><?php  echo __('Campus');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($campus['Campus']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nome'); ?></dt>
		<dd>
			<?php echo h($campus['Campus']['nome']); ?>
			&nbsp;
		</dd>
	</dl>
	<div class="related">
		<h3><?php echo __('Related Cursos');?></h3>
		<?php if (!empty($campus['Curso'])):?>
		<table cellpadding = "0" cellspacing = "0">
		<tr>
			<th><?php echo __('Id'); ?></th>
			<th><?php echo __('Campus Id'); ?></th>
			<th><?php echo __('Modalidade Id'); ?></th>
			<th><?php echo __('Turno Id'); ?></th>
			<th><?php echo __('Regime Curso Id'); ?></th>
			<th class="actions"><?php echo __('Actions');?></th>
		</tr>
		<?php
			$i = 0;
			foreach ($campus['Curso'] as $curso): ?>
			<tr>
				<td><?php echo $curso['id'];?></td>
				<td><?php echo $curso['campus_id'];?></td>
				<td><?php echo $curso['modalidade_id'];?></td>
				<td><?php echo $curso['turno_id'];?></td>
				<td><?php echo $curso['regime_curso_id'];?></td>
				<td class="actions">
					<?php echo $this->Html->link(__('View'), array('controller' => 'cursos', 'action' => 'view', $curso['id'])); ?>
					<?php echo $this->Html->link(__('Edit'), array('controller' => 'cursos', 'action' => 'edit', $curso['id'])); ?>
					<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'cursos', 'action' => 'delete', $curso['id']), null, __('Are you sure you want to delete # %s?', $curso['id'])); ?>
				</td>
			</tr>
		<?php endforeach; ?>
		</table>
	<?php endif; ?>
	</div>
</div>
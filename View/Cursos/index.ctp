<div class="cursos index">
	<h2><?php echo __('Cursos');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('campus_id');?></th>
			<th><?php echo $this->Paginator->sort('modalidade_id');?></th>
			<th><?php echo $this->Paginator->sort('turno_id');?></th>
			<th><?php echo $this->Paginator->sort('regime_curso_id');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($cursos as $curso): ?>
	<tr>
		<td><?php echo h($curso['Curso']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($curso['Campus']['id'], array('controller' => 'campus', 'action' => 'view', $curso['Campus']['id'])); ?>
		</td>
		<td><?php echo h($curso['Curso']['modalidade_id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($curso['Turno']['id'], array('controller' => 'turnos', 'action' => 'view', $curso['Turno']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($curso['RegimeCurso']['id'], array('controller' => 'regime_cursos', 'action' => 'view', $curso['RegimeCurso']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $curso['Curso']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $curso['Curso']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $curso['Curso']['id']), null, __('Are you sure you want to delete # %s?', $curso['Curso']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Curso'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Campus'), array('controller' => 'campus', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Campus'), array('controller' => 'campus', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Modalidade Cursos'), array('controller' => 'modalidade_cursos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Modalidade Curso'), array('controller' => 'modalidade_cursos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Turnos'), array('controller' => 'turnos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Turno'), array('controller' => 'turnos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Regime Cursos'), array('controller' => 'regime_cursos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Regime Curso'), array('controller' => 'regime_cursos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Alunos'), array('controller' => 'alunos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Aluno'), array('controller' => 'alunos', 'action' => 'add')); ?> </li>
	</ul>
</div>

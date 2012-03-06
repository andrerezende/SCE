<div class="cursos view">
<h2><?php  echo __('Curso');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($curso['Curso']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Campus'); ?></dt>
		<dd>
			<?php echo $this->Html->link($curso['Campus']['id'], array('controller' => 'campus', 'action' => 'view', $curso['Campus']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modalidade Id'); ?></dt>
		<dd>
			<?php echo h($curso['Curso']['modalidade_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Turno'); ?></dt>
		<dd>
			<?php echo $this->Html->link($curso['Turno']['id'], array('controller' => 'turnos', 'action' => 'view', $curso['Turno']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Regime Curso'); ?></dt>
		<dd>
			<?php echo $this->Html->link($curso['RegimeCurso']['id'], array('controller' => 'regime_cursos', 'action' => 'view', $curso['RegimeCurso']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Curso'), array('action' => 'edit', $curso['Curso']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Curso'), array('action' => 'delete', $curso['Curso']['id']), null, __('Are you sure you want to delete # %s?', $curso['Curso']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Cursos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Curso'), array('action' => 'add')); ?> </li>
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
<div class="related">
	<h3><?php echo __('Related Alunos');?></h3>
	<?php if (!empty($curso['Aluno'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Curso Id'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($curso['Aluno'] as $aluno): ?>
		<tr>
			<td><?php echo $aluno['id'];?></td>
			<td><?php echo $aluno['curso_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'alunos', 'action' => 'view', $aluno['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'alunos', 'action' => 'edit', $aluno['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'alunos', 'action' => 'delete', $aluno['id']), null, __('Are you sure you want to delete # %s?', $aluno['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Aluno'), array('controller' => 'alunos', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>

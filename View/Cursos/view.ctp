<div class="span9">
<h2><?php  echo __('Curso');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($curso['Curso']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Campus'); ?></dt>
		<dd>
			<?php echo $this->Html->link($curso['Campus']['nome'], array('controller' => 'campus', 'action' => 'view', $curso['Campus']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modalidade'); ?></dt>
		<dd>
			<?php echo $this->Html->link($curso['ModalidadeCurso']['descricao'], array('controller' => 'turnos', 'action' => 'view', $curso['Turno']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Turno'); ?></dt>
		<dd>
			<?php echo $this->Html->link($curso['Turno']['descricao'], array('controller' => 'turnos', 'action' => 'view', $curso['Turno']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nome'); ?></dt>
		<dd>
			<?php echo h($curso['Curso']['nome']); ?>
			&nbsp;
		</dd>
	</dl>

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
	</div>
</div>

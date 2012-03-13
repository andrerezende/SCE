<div class="respostas view">
<h2><?php  echo __('Resposta');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($resposta['Resposta']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pergunta'); ?></dt>
		<dd>
			<?php echo $this->Html->link($resposta['Pergunta']['descricao'], array('controller' => 'perguntas', 'action' => 'view', $resposta['Pergunta']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($resposta['Resposta']['descricao']); ?>
			&nbsp;
		</dd>
	</dl>
	<div class="related">
		<h3><?php echo __('Related Alunos');?></h3>
		<?php if (!empty($resposta['Aluno'])):?>
		<table cellpadding = "0" cellspacing = "0">
		<tr>
			<th><?php echo __('Id'); ?></th>
			<th><?php echo __('Curso Id'); ?></th>
			<th class="actions"><?php echo __('Actions');?></th>
		</tr>
		<?php
			$i = 0;
			foreach ($resposta['Aluno'] as $aluno): ?>
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
<div class="span9">
<h2><?php  echo __('Ano de Questionários');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($anoQuestionario['AnoQuestionario']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descrição'); ?></dt>
		<dd>
			<?php echo h($anoQuestionario['AnoQuestionario']['descricao']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Padrão'); ?></dt>
		<dd>
			<?php echo $this->Util->ativo($anoQuestionario['AnoQuestionario']['default']); ?>
			&nbsp;
		</dd>
	</dl>
	<div class="related">
		<h3><?php echo __('Perguntas relacionadas');?></h3>
		<?php if (!empty($anoQuestionario['Pergunta'])):?>
		<table cellpadding = "0" cellspacing = "0">
		<tr>
			<th><?php echo __('Id'); ?></th>
			<th><?php echo __('Descrição'); ?></th>
			<th class="actions"><?php echo __('Ações');?></th>
		</tr>
		<?php
			foreach ($anoQuestionario['Pergunta'] as $pergunta): ?>
			<tr>
				<td><?php echo $pergunta['id'];?></td>
				<td><?php echo $pergunta['descricao'];?></td>
				<td class="actions">
					<?php echo $this->Html->link(__('Ver'), array('controller' => 'perguntas', 'action' => 'view', $pergunta['id'])); ?>
					<?php echo $this->Html->link(__('Editar'), array('controller' => 'perguntas', 'action' => 'edit', $pergunta['id'])); ?>
					<?php echo $this->Form->postLink(__('Excluir'), array('controller' => 'perguntas', 'action' => 'delete', $pergunta['id']), null, __('Você tem certeza que deseja excluir o # %s?', $pergunta['id'])); ?>
				</td>
			</tr>
		<?php endforeach; ?>
		</table>
	<?php endif; ?>
	</div>
</div>

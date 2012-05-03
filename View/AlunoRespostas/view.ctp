<div class="span9">
<h2><?php  echo __('Aluno Resposta');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($alunoResposta['AlunoResposta']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Aluno'); ?></dt>
		<dd>
			<?php echo $this->Html->link($alunoResposta['Aluno']['id'], array('controller' => 'alunos', 'action' => 'view', $alunoResposta['Aluno']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Resposta'); ?></dt>
		<dd>
			<?php echo $this->Html->link($alunoResposta['Resposta']['id'], array('controller' => 'respostas', 'action' => 'view', $alunoResposta['Resposta']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="alunoRespostas view">
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
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Aluno Resposta'), array('action' => 'edit', $alunoResposta['AlunoResposta']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Aluno Resposta'), array('action' => 'delete', $alunoResposta['AlunoResposta']['id']), null, __('Are you sure you want to delete # %s?', $alunoResposta['AlunoResposta']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Aluno Respostas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Aluno Resposta'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Alunos'), array('controller' => 'alunos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Aluno'), array('controller' => 'alunos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Respostas'), array('controller' => 'respostas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Resposta'), array('controller' => 'respostas', 'action' => 'add')); ?> </li>
	</ul>
</div>

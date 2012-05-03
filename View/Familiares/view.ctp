<div class="span9">
<h2><?php  echo __('Familiar');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($familiar['Familiar']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Aluno'); ?></dt>
		<dd>
			<?php echo $this->Html->link($familiar['Aluno']['nome'], array('controller' => 'alunos', 'action' => 'view', $familiar['Aluno']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nome'); ?></dt>
		<dd>
			<?php echo h($familiar['Familiar']['nome']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Grau Parentesco'); ?></dt>
		<dd>
			<?php echo h($familiar['Familiar']['grau_parentesco']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Idade'); ?></dt>
		<dd>
			<?php echo h($familiar['Familiar']['idade']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Escolaridade'); ?></dt>
		<dd>
			<?php echo h($familiar['Familiar']['escolaridade']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ocupação'); ?></dt>
		<dd>
			<?php echo h($familiar['Familiar']['ocupacao']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Local Trabalho'); ?></dt>
		<dd>
			<?php echo h($familiar['Familiar']['local_trabalho']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Renda'); ?></dt>
		<dd>
			<?php echo h($familiar['Familiar']['renda']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
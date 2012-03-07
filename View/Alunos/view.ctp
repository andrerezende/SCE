<div class="alunos view">
<h2><?php  echo __('Aluno');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($aluno['Aluno']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Curso'); ?></dt>
		<dd>
			<?php echo $this->Html->link($aluno['Curso']['id'], array('controller' => 'cursos', 'action' => 'view', $aluno['Curso']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nome'); ?></dt>
		<dd>
			<?php echo h($aluno['Aluno']['nome']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Matricula'); ?></dt>
		<dd>
			<?php echo h($aluno['Aluno']['matricula']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rg'); ?></dt>
		<dd>
			<?php echo h($aluno['Aluno']['rg']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Orgao Expedidor'); ?></dt>
		<dd>
			<?php echo h($aluno['Aluno']['orgao_expedidor']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cpf'); ?></dt>
		<dd>
			<?php echo h($aluno['Aluno']['cpf']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sexo'); ?></dt>
		<dd>
			<?php echo h($aluno['Aluno']['sexo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Estado Civil'); ?></dt>
		<dd>
			<?php echo h($aluno['Aluno']['estado_civil']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Data Nascimento'); ?></dt>
		<dd>
			<?php echo h($aluno['Aluno']['data_nascimento']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Endereco'); ?></dt>
		<dd>
			<?php echo h($aluno['Aluno']['endereco']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Telefone'); ?></dt>
		<dd>
			<?php echo h($aluno['Aluno']['telefone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Celular'); ?></dt>
		<dd>
			<?php echo h($aluno['Aluno']['celular']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cep'); ?></dt>
		<dd>
			<?php echo h($aluno['Aluno']['cep']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cidade Estado'); ?></dt>
		<dd>
			<?php echo h($aluno['Aluno']['cidade_estado']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ponto Referencia'); ?></dt>
		<dd>
			<?php echo h($aluno['Aluno']['ponto_referencia']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Etnia'); ?></dt>
		<dd>
			<?php echo h($aluno['Aluno']['etnia']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Religiao'); ?></dt>
		<dd>
			<?php echo h($aluno['Aluno']['religiao']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Necessidade Especial'); ?></dt>
		<dd>
			<?php echo h($aluno['Aluno']['necessidade_especial']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Doenca Hereditaria'); ?></dt>
		<dd>
			<?php echo h($aluno['Aluno']['doenca_hereditaria']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Remedio Controlado'); ?></dt>
		<dd>
			<?php echo h($aluno['Aluno']['remedio_controlado']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tipo Sanguineo'); ?></dt>
		<dd>
			<?php echo h($aluno['Aluno']['tipo_sanguineo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fator Rh'); ?></dt>
		<dd>
			<?php echo h($aluno['Aluno']['fator_rh']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Faixa Etaria'); ?></dt>
		<dd>
			<?php echo h($aluno['Aluno']['faixa_etaria']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="related">
	<h3><?php echo __('Related Respostas');?></h3>
	<?php if (!empty($aluno['Resposta'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Pergunta Id'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($aluno['Resposta'] as $resposta): ?>
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
</div>

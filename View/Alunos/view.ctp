<div class="alunos view">
	<h1><?php  echo __('Aluno #') . h($aluno['Aluno']['id']);?>: <?php echo h($aluno['Aluno']['nome']); ?></h1>
	<?php echo $this->Html->link('<i class="icon-pencil"></i> Editar', array('action' => 'edit', $aluno['Aluno']['id']), array('escape' => false, 'class' => 'btn'));?>
	<dl class="dl-horizontal">
		<dt><?php echo __('Curso'); ?></dt>
		<dd>
			<?php echo $this->Html->link($aluno['Curso']['nome'], array('controller' => 'cursos', 'action' => 'view', $aluno['Curso']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Matricula'); ?></dt>
		<dd>
			<?php echo h($aluno['Aluno']['matricula']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('RG'); ?></dt>
		<dd>
			<?php echo h($aluno['Aluno']['rg']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Orgao Expedidor'); ?></dt>
		<dd>
			<?php echo h($aluno['Aluno']['orgao_expedidor']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('CPF'); ?></dt>
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
		<dt><?php echo __('Data de Nascimento'); ?></dt>
		<dd>
			<?php echo h($aluno['Aluno']['data_nascimento']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Endereço'); ?></dt>
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
		<dt><?php echo __('CEP'); ?></dt>
		<dd>
			<?php echo h($aluno['Aluno']['cep']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cidade / Estado'); ?></dt>
		<dd>
			<?php echo h($aluno['Aluno']['cidade_estado']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ponto de Referência'); ?></dt>
		<dd>
			<?php echo h($aluno['Aluno']['ponto_referencia']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Etnia'); ?></dt>
		<dd>
			<?php echo h($aluno['Aluno']['etnia']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Religião'); ?></dt>
		<dd>
			<?php echo h($aluno['Aluno']['religiao']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Necessidade Especial'); ?></dt>
		<dd>
			<?php echo h($aluno['Aluno']['necessidade_especial']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Doença Hereditária'); ?></dt>
		<dd>
			<?php echo h($aluno['Aluno']['doenca_hereditaria']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Remédio Controlado'); ?></dt>
		<dd>
			<?php echo h($aluno['Aluno']['remedio_controlado']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tipo Sanguíneo'); ?></dt>
		<dd>
			<?php echo h($aluno['Aluno']['tipo_sanguineo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fator RH'); ?></dt>
		<dd>
			<?php echo h($aluno['Aluno']['fator_rh']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Faixa Etária'); ?></dt>
		<dd>
			<?php echo h($aluno['Aluno']['faixa_etaria']); ?>
			&nbsp;
		</dd>
	</dl>
	<div class="related">
		<h3><?php echo __('Questionário Socioeconômico');?></h3>
		<?php if (!empty($aluno['AlunoResposta'])):?>
		<table cellpadding = "0" cellspacing = "0">
		<tr>
			<th><?php echo __('Pergunta'); ?></th>
			<th><?php echo __('Resposta'); ?></th>
		</tr>
		<?php foreach($respostas as $resposta):?>
			<tr>
				<td><?php echo $resposta['Resposta']['Pergunta']['descricao'];?></td>
				<td><?php echo $resposta['Resposta']['descricao'];?></td>
			</tr>
		<?php endforeach;?>
		</table>
	<?php endif; ?>
	</div>
</div>
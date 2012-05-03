<div class="span9">
	<h1>
		<?php  echo __('Aluno #') . h($aluno['Aluno']['id']);?>: <?php echo h($aluno['Aluno']['nome']); ?>
		<?php echo $this->Html->link('<i class="icon-pencil"></i> Editar', array('action' => 'passo_um', 'aluno_id' => $aluno['Aluno']['id']), array('escape' => false, 'class' => 'btn'));?>
	</h1>
	<p>&nbsp;</p>
	<div class="row">
		<div class="span8">
			<table class="table">
				<tbody>
					<tr>
						<td><strong><?php echo __('Curso'); ?></strong></td>
							<td>
							<?php echo $this->Html->link($aluno['Curso']['nome'], array('controller' => 'cursos', 'action' => 'view', $aluno['Curso']['id'])); ?>
							&nbsp;
							</td>
					</tr>
					<tr>
						<td><strong><?php echo __('Matricula'); ?></strong></td>
						<td>
							<?php echo h($aluno['Aluno']['matricula']); ?>
							&nbsp;
						</td>
					</tr>
					<tr>
						<td><strong><?php echo __('RG'); ?></strong></td>
						<td>
							<?php echo h($aluno['Aluno']['rg']); ?>
							&nbsp;
						</td>
					</tr>
					<tr>
						<td><strong><?php echo __('Orgao Expedidor'); ?></strong></td>
						<td>
							<?php echo h($aluno['Aluno']['orgao_expedidor']); ?>
							&nbsp;
						</td>
					</tr>
					<tr>
						<td><strong><?php echo __('CPF'); ?></strong></td>
						<td>
							<?php echo h($aluno['Aluno']['cpf']); ?>
							&nbsp;
						</td>
					</tr>
					<tr>
						<td><strong><?php echo __('Sexo'); ?></strong></td>
						<td>
							<?php echo h($aluno['Aluno']['sexo']); ?>
							&nbsp;
						</td>
					</tr>
					<tr>
						<td><strong><?php echo __('Estado Civil'); ?></strong></td>
						<td>
							<?php echo h($aluno['Aluno']['estado_civil']); ?>
							&nbsp;
						</td>
					</tr>
					<tr>
						<td><strong><?php echo __('Data de Nascimento'); ?></strong></td>
						<td>
							<?php echo h($aluno['Aluno']['data_nascimento']); ?>
							&nbsp;
						</td>
					</tr>
					<tr>
						<td><strong><?php echo __('Endereço'); ?></strong></td>
						<td>
							<?php echo h($aluno['Aluno']['endereco']); ?>
							&nbsp;
						</td>
					</tr>
					<tr>
						<td><strong><?php echo __('Telefone'); ?></strong></td>
						<td>
							<?php echo h($aluno['Aluno']['telefone']); ?>
							&nbsp;
						</td>
					</tr>
					<tr>
						<td><strong><?php echo __('Celular'); ?></strong></td>
						<td>
							<?php echo h($aluno['Aluno']['celular']); ?>
							&nbsp;
						</td>
					</tr>
					<tr>
						<td><strong><?php echo __('CEP'); ?></strong></td>
						<td>
							<?php echo h($aluno['Aluno']['cep']); ?>
							&nbsp;
						</td>
					</tr>
					<tr>
						<td><strong><?php echo __('Cidade / Estado'); ?></strong></td>
						<td>
							<?php echo h($aluno['Aluno']['cidade_estado']); ?>
							&nbsp;
						</td>
					</tr>
					<tr>
						<td><strong><?php echo __('Ponto de Referência'); ?></strong></td>
						<td>
							<?php echo h($aluno['Aluno']['ponto_referencia']); ?>
							&nbsp;
						</td>
					</tr>
					<tr>
						<td><strong><?php echo __('Etnia'); ?></strong></td>
						<td>
							<?php echo h($aluno['Aluno']['etnia']); ?>
							&nbsp;
						</td>
					</tr>
					<tr>
						<td><strong><?php echo __('Religião'); ?></strong></td>
						<td>
							<?php echo h($aluno['Aluno']['religiao']); ?>
							&nbsp;
						</td>
					</tr>
					<tr>
						<td><strong><?php echo __('Necessidade Especial'); ?></strong></td>
						<td>
							<?php echo h($aluno['Aluno']['necessidade_especial']); ?>
							&nbsp;
						</td>
					</tr>
					<tr>
						<td><strong><?php echo __('Doença Hereditária'); ?></strong></td>
						<td>
							<?php echo h($aluno['Aluno']['doenca_hereditaria']); ?>
							&nbsp;
						</td>
					</tr>
					<tr>
						<td><strong><?php echo __('Remédio Controlado'); ?></strong></td>
						<td>
							<?php echo h($aluno['Aluno']['remedio_controlado']); ?>
							&nbsp;
						</td>
					</tr>
					<tr>
						<td><strong><?php echo __('Tipo Sanguíneo'); ?></strong></td>
						<td>
							<?php echo h($aluno['Aluno']['tipo_sanguineo']); ?>
							&nbsp;
						</td>
					</tr>
					<tr>
						<td><strong><?php echo __('Fator RH'); ?></strong></td>
						<td>
							<?php echo h($aluno['Aluno']['fator_rh']); ?>
							&nbsp;
						</td>
					</tr>
					<?php if (!empty($aluno['AlunoResposta'])):?>
						<?php foreach($respostas as $resposta):?>
							<tr>
								<td><strong><?php echo $resposta['Resposta']['Pergunta']['descricao'];?></strong></td>
								<td><?php echo $resposta['Resposta']['descricao'];?></td>
							</tr>
						<?php endforeach;?>
					<?php endif; ?>
				</tbody>
			</table>
		</div>
		<div class="span8">
			<h2>Familiares</h2>
			<table class="table table-condensed">
				<thead>
					<th>#</th>
					<th>Nome</th>
					<th>Grau de Parentesco</th>
					<th>Idade</th>
					<th>Escolaridade</th>
					<th>Ocupação</th>
					<th>Local de Trabalho</th>
					<th>Renda</th>
				</thead>
				<tbody>
					<?php foreach($aluno['Familiar'] as $familiar):?>
						<tr>
							<td><?php echo $familiar['id'];?></td>
							<td><?php echo $familiar['nome'];?></td>
							<td><?php echo $familiar['grau_parentesco'];?></td>
							<td><?php echo $familiar['idade'];?> anos</td>
							<td><?php echo $familiar['escolaridade'];?></td>
							<td><?php echo $familiar['ocupacao'];?></td>
							<td><?php echo $familiar['local_trabalho'];?></td>
							<td>R$ <?php echo $familiar['renda'];?></td>
						</tr>
					<?php endforeach;?>
				</tbody>
			</table>
		</div>
	</div>
</div>
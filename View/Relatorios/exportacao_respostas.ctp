<table>
	<tr>
		<th>Curso</th>
		<th>Modalidade</th>
		<th>Turno</th>
		<th>Aluno</th>
		<th><?php echo utf8_decode('Matrícula');?></th>
		<th>RG</th>
		<th><?php echo utf8_decode('Órgão Expedidor');?></th>
		<th>CPF</th>
		<th>Sexo</th>
		<th>Estado Civil</th>
		<th>Data de Nascimento</th>
		<th><?php echo utf8_decode('Endereço');?></th>
		<th>Telefone</th>
		<th>Celular</th>
		<th>CEP</th>
		<th>Cidade / Estado</th>
		<th><?php echo utf8_decode('Ponto de Referência');?></th>
		<th>Etnia</th>
		<th><?php echo utf8_decode('Religião');?></th>
		<th>Necessidade Especial</th>
		<th<?php echo utf8_decode('>Doença Hereditária');?></th>
		<th><?php echo utf8_decode('Remédio Controlado');?></th>
		<th><?php echo utf8_decode('Tipo Sanguíneo');?></th>
		<th>Fator RH</th>
		<th>Regime do Curso</th>
		<th><?php echo utf8_decode('Faixa Etária');?></th>
		<th><?php echo utf8_decode('Ano do Questionário');?></th>
		<?php foreach ($perguntas as $pergunta) :?>
			<th><?php echo utf8_decode($pergunta);?></th>
		<?php endforeach;?>
		<th><?php echo utf8_decode('Quantidade de Familiares que moram com você');?></th>
		<th><?php echo utf8_decode('Soma da renda dos Familiares que moram com você');?></th>
	</tr>
	<?php
	foreach ($alunos as $aluno) :
		$qtdFamiliares = count($aluno['Familiar']);
		$rendaFamiliares = 0;
		foreach ($aluno['Familiar'] as $familiar) {
			$rendaFamiliares += $familiar['renda'];
		}
		if (!isset($aluno['AlunoResposta']) || empty($aluno['AlunoResposta'])) {
			continue;
		}
	?>
		<tr>
			<?php
			echo $this->Html->tag('td', utf8_decode($aluno['Curso']['nome']));
			echo $this->Html->tag('td', utf8_decode($aluno['Curso']['Turno']['descricao']));
			echo $this->Html->tag('td', utf8_decode($aluno['Curso']['ModalidadeCurso']['descricao']));
			echo $this->Html->tag('td', utf8_decode($aluno['Aluno']['nome']));
			echo $this->Html->tag('td', utf8_decode($aluno['Aluno']['matricula']));
			echo $this->Html->tag('td', utf8_decode($aluno['Aluno']['rg']));
			echo $this->Html->tag('td', utf8_decode($aluno['Aluno']['orgao_expedidor']));
			echo $this->Html->tag('td', utf8_decode($aluno['Aluno']['cpf']));
			echo $this->Html->tag('td', utf8_decode(ucfirst($aluno['Aluno']['sexo'])));
			echo $this->Html->tag('td', utf8_decode($aluno['Aluno']['estado_civil']));
			echo $this->Html->tag('td', utf8_decode($this->Formatacao->data($aluno['Aluno']['data_nascimento'])));
			echo $this->Html->tag('td', utf8_decode($aluno['Aluno']['endereco']));
			echo $this->Html->tag('td', utf8_decode($aluno['Aluno']['telefone']));
			echo $this->Html->tag('td', utf8_decode($aluno['Aluno']['celular']));
			echo $this->Html->tag('td', utf8_decode($aluno['Aluno']['cep']));
			echo $this->Html->tag('td', utf8_decode($aluno['Aluno']['cidade_estado']));
			echo $this->Html->tag('td', utf8_decode($aluno['Aluno']['ponto_referencia']));
			echo $this->Html->tag('td', utf8_decode($aluno['Aluno']['etnia']));
			echo $this->Html->tag('td', utf8_decode($aluno['Aluno']['religiao']));
			echo $this->Html->tag('td', utf8_decode($aluno['Aluno']['necessidade_especial']));
			echo $this->Html->tag('td', utf8_decode($this->Util->ativo($aluno['Aluno']['doenca_hereditaria'])));
			echo $this->Html->tag('td', utf8_decode($this->Util->ativo($aluno['Aluno']['remedio_controlado'])));
			echo $this->Html->tag('td', utf8_decode($aluno['Aluno']['tipo_sanguineo']));
			echo $this->Html->tag('td', utf8_decode($this->Util->fatorRh($aluno['Aluno']['fator_rh'])));
			echo $this->Html->tag('td', utf8_decode($aluno['RegimeCurso']['descricao']));
			echo $this->Html->tag('td', utf8_decode($aluno['Aluno']['faixa_etaria']));
			echo $this->Html->tag('td', utf8_decode($anoQuestionario['AnoQuestionario']['descricao']));
			foreach ($aluno['AlunoResposta'] as $alunoResposta) {
				if (!isset($alunoResposta['Pergunta']) || empty($alunoResposta['Pergunta'])) {
					continue;
				}
				if (!isset($alunoResposta['Resposta']) || empty($alunoResposta['Resposta'])) {
					continue;
				}
				if ($alunoResposta['Resposta']['opcao'] != null) {
					echo $this->Html->tag('td', utf8_decode($alunoResposta['Resposta']['opcao']));
				} else {
					echo $this->Html->tag('td', utf8_decode($alunoResposta['Resposta']['descricao']));
				}
			}
			echo $this->Html->tag('td', $qtdFamiliares);
			echo $this->Html->tag('td', 'R$ ' . number_format($rendaFamiliares, 2, ',', '.'));
			?>
		</tr>
	<?php endforeach;?>
</table>
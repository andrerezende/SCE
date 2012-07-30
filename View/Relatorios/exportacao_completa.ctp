<table>
	<tr>
		<th>Curso</th>
		<th>Modalidade</th>
		<th>Turno</th>
		<th>Aluno</th>
		<th>Matricula</th>
		<th>RG</th>
		<th>Orgão Expedidor</th>
		<th>CPF</th>
		<th>Sexo</th>
		<th>Estado Civil</th>
		<th>Data de Nascimento</th>
		<th>Endereço</th>
		<th>Telefone</th>
		<th>Celular</th>
		<th>CEP</th>
		<th>Cidade / Estado</th>
		<th>Ponto de Referência</th>
		<th>Etnia</th>
		<th>Religião</th>
		<th>Necessidade Especial</th>
		<th>Doença Hereditária</th>
		<th>Remédio Controlado</th>
		<th>Tipo Sanguíneo</th>
		<th>Fator RH</th>
		<th>Regime do Curso</th>
		<th>Faixa Etária</th>
		<th><?php echo utf8_decode('Estudou o Ensino Médio na Escola Pública');?></th>
		<th>Ano do Questionário</th>
	</tr>
<?php foreach ($data as $key => $row) :?>
	<tr>
		<?php foreach ($row[0] as $subKey => $field):?>
			<?php
			if ($subKey == 'data_nascimento') {
				$row[0][$subKey] = $this->Formatacao->data($row[0][$subKey]);
			}
			if ($subKey == 'pergunta') {
				continue;
			}
			?>
			<td><?php echo utf8_decode($field);?></td>
		<?php endforeach;?>
	</tr>
<?php endforeach;?>
</table>
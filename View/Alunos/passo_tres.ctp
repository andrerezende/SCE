<script type="text/javascript">
	$(document).ready(function() {
		$("#AlunoCpf").mask("999.999.999-99");
		$("#AlunoTelefone").mask("(99) 9999-9999");
		$("#AlunoCelular").mask("(99) 9999-9999");
		$("#AlunoCep").mask("99999-999");
	});
</script>
<div class="span9">
<?php
$qtdFamiliares = $this->params->named['familiares'];
echo $this->Form->create('Aluno', array('class' => 'form-horizontal', 'inputDefaults' => array('label' => false, 'div' => false)));
echo $this->Form->input('Aluno.id', array('value' => $this->params->named['aluno_id'], 'type' => 'hidden'));
?>
	<fieldset>
		<legend><?php echo __('RENDA FAMILIAR MENSAL'); ?></legend>
		<table>
			<tr>
				<th>#</th>
				<th>Nome</th>
				<th>Grau de Parentesco</th>
				<th>Idade</th>
				<th>Escolaridade</th>
				<th>Ocupação</th>
				<th>Local de Trabalho</th>
				<th>Renda</th>
			</tr>
			<?php for ($i = 0; $i < $qtdFamiliares; $i++):?>
			<tr>
				<td><?php echo $i + 1;?></td>
				<td><?php echo $this->Form->input('Familiar.' . $i . '.nome', array('class' => 'input-medium'));?></td>
				<td><?php echo $this->Form->input('Familiar.' . $i . '.grau_parentesco', array('class' => 'input-medium'));?></td>
				<td><?php echo $this->Form->input('Familiar.' . $i . '.idade', array('class' => 'input-mini'));?></td>
				<td><?php echo $this->Form->input('Familiar.' . $i . '.escolaridade', array('class' => 'input-medium'));?></td>
				<td><?php echo $this->Form->input('Familiar.' . $i . '.ocupacao', array('class' => 'input-medium'));?></td>
				<td><?php echo $this->Form->input('Familiar.' . $i . '.local_trabalho', array('class' => 'input-medium'));?></td>
				<td><?php echo $this->Form->input('Familiar.' . $i . '.renda', array('class' => 'input-mini'));?></td>
			</tr>
			<?php endfor;?>
		</table>
	</fieldset>
<?php echo $this->Form->end(__('Finalizar'));?>
</div>
<script type="text/javascript">
	$(document).ready(function() {
		$("#AlunoCpf").mask("999.999.999-99");
		$("#AlunoTelefone").mask("(99) 9999-9999");
		$("#AlunoCelular").mask("(99) 9999-9999");
		$("#AlunoCep").mask("99999-999");
	});
</script>
<div class="alunos form">
<?php echo $this->Form->create('Aluno');?>
	<fieldset>
		<legend><?php echo __('IDENTIFICAÇÃO DO ESTUDANTE'); ?></legend>
	<?php
	if (isset($this->params->named['aluno_id'])) {
		echo $this->Form->input('Aluno.id', array('value' => $this->params->named['aluno_id'], 'type' => 'hidden'));
	}
	echo $this->Form->input('curso_id', array('empty' => 'Selecione'));
	echo $this->Form->input('nome', array('class' => 'span3'));
	echo $this->Form->input('matricula', array('label' => 'Matrícula'));
	echo $this->Form->input('rg', array('label' => 'RG'));
	echo $this->Form->input('orgao_expedidor', array('label' => 'Órgão Expedidor', 'class' => 'span1'));
	echo $this->Form->input('cpf', array('label' => 'CPF'));
	echo $this->Form->label('Aluno.sexo', 'Sexo', array('class' => 'control-label'));
	echo $this->Form->input('sexo', array(
		'options' => Configure::read('Aluno.sexo'),
		'type' => 'radio',
		'div' => 'control-group',
		'legend' => false,
	));
	echo $this->Form->label('Aluno.estado_civil', 'Estado Civil', array('class' => 'control-label'));
	echo $this->Form->input('estado_civil', array(
		'options' => Configure::read('Aluno.estado_civil'),
		'type' => 'radio',
		'div' => 'control-group',
		'legend' => false,
	));
	echo $this->Form->input('data_nascimento', array(
		'dateFormat' => 'DMY',
		'label' => 'Data de Nascimento',
		'separator' => ' ',
		'maxYear' => date('Y') - 1,
		'minYear' => date('Y') - 90,
		'class' => 'span1',
	));
	echo $this->Form->input('endereco', array('label' => 'Endereço', 'class' => 'span3'));
	echo $this->Form->input('telefone');
	echo $this->Form->input('celular');
	echo $this->Form->input('cep', array('label' => 'CEP', 'class' => 'span2'));
	echo $this->Form->input('cidade_estado', array('label' => 'Cidade/UF', 'class' => 'span2'));
	echo $this->Form->input('ponto_referencia', array('label' => 'Ponto de referência residencial', 'class' => 'span3'));
	echo $this->Form->input('etnia', array('options' => Configure::read('Aluno.etnia'), 'empty' => 'Outra'));
	echo $this->Form->input('religiao', array('label' => 'Possui alguma religião'));
	echo $this->Form->label('Aluno.necessidade_especial', 'Pessoa com necessidade educacional especial', array('class' => 'control-label'));
	echo $this->Form->input('necessidade_especial', array(
		'options' => Configure::read('Aluno.necessidade_especial'),
		'type' => 'radio',
		'div' => 'control-group',
		'legend' => false,
	));
	echo $this->Form->input('doenca_hereditaria', array('label' => 'Possui doença hereditária ou outras'));
	echo $this->Form->input('remedio_controlado', array('label' => 'Faz uso contínuo de remédio controlado'));
	echo $this->Form->label('Aluno.tipo_sanguineo', 'Tipo sanguíneo', array('class' => 'control-label'));
	echo $this->Form->input('tipo_sanguineo', array(
		'options' => Configure::read('Aluno.tipo_sanguineo'),
		'type' => 'radio',
		'div' => 'control-group',
		'legend' => false,
	));
	echo $this->Form->label('Aluno.fator_rh', 'Fator RH', array('class' => 'control-label'));
	echo $this->Form->input('fator_rh', array(
		'options' => Configure::read('Aluno.fator_rh'),
		'type' => 'radio',
		'div' => 'control-group',
		'legend' => false,
	));
	echo $this->Form->input('faixa_etaria', array('options' => Configure::read('Aluno.faixa_etaria')));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Próximo'));?>
</div>
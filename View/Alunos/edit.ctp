<div class="alunos form">
<?php echo $this->Form->create('Aluno');?>
	<fieldset>
		<legend><?php echo __('Edit Aluno'); ?></legend>
	<?php
	echo $this->Form->input('id');
	echo $this->Form->input('curso_id');
	echo $this->Form->input('nome');
	echo $this->Form->input('matricula');
	echo $this->Form->input('rg');
	echo $this->Form->input('orgao_expedidor');
	echo $this->Form->input('cpf');
	echo $this->Form->input('sexo');
	echo $this->Form->input('estado_civil');
	echo $this->Form->input('data_nascimento');
	echo $this->Form->input('endereco');
	echo $this->Form->input('telefone');
	echo $this->Form->input('celular');
	echo $this->Form->input('cep');
	echo $this->Form->input('cidade_estado');
	echo $this->Form->input('ponto_referencia');
	echo $this->Form->input('etnia');
	echo $this->Form->input('religiao');
	echo $this->Form->input('necessidade_especial');
	echo $this->Form->input('doenca_hereditaria');
	echo $this->Form->input('remedio_controlado');
	echo $this->Form->input('tipo_sanguineo');
	echo $this->Form->input('fator_rh');
	echo $this->Form->input('faixa_etaria');
	echo $this->Form->input('Resposta');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
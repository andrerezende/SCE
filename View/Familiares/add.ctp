<div class="span9">
<?php echo $this->Form->create('Familiar');?>
	<fieldset>
		<legend><?php echo __('Incluir Familiar'); ?></legend>
	<?php
		echo $this->Form->input('aluno_id');
		echo $this->Form->input('nome');
		echo $this->Form->input('grau_parentesco');
		echo $this->Form->input('idade');
		echo $this->Form->input('escolaridade');
		echo $this->Form->input('ocupacao');
		echo $this->Form->input('local_trabalho');
		echo $this->Form->input('renda');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Enviar', true));?>
</div>
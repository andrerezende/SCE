<div class="anoQuestionarios form">
<?php echo $this->Form->create('AnoQuestionario');?>
	<fieldset>
		<legend><?php echo __('Adicionar Ano'); ?></legend>
	<?php
		echo $this->Form->input('descricao', array('label' => 'Descrição'));
		echo $this->Form->input('default', array('label' => 'Padrão'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Enviar', true));?>
</div>

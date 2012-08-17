<div class="span9">
<?php echo $this->Form->create('Relatorio');?>
	<fieldset>
		<legend><?php echo __('Gerar relatório'); ?></legend>
	<?php echo $this->Form->input('ano_questionario_id', array('options' => $ano_questionarios, 'empty' => 'Selecione'));?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="span9">
<?php echo $this->Form->create('Campus');?>
	<fieldset>
		<legend><?php echo __('Add Campus'); ?></legend>
	<?php
	echo $this->Form->input('nome');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>

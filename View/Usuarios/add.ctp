<div class="usuarios form">
<?php echo $this->Form->create('Usuario');?>
	<fieldset>
		<legend><?php echo __('Add Usuario'); ?></legend>
	<?php
		echo $this->Form->input('login');
		echo $this->Form->input('senha', array('type' => 'password'));
		echo $this->Form->input('ativo');
		echo $this->Form->input('perfil');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Usuarios'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Grupos'), array('controller' => 'grupos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Grupo'), array('controller' => 'grupos', 'action' => 'add')); ?> </li>
	</ul>
</div>

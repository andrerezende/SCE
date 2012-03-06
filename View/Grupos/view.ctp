<div class="grupos view">
<h2><?php  echo __('Grupo');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($grupo['Grupo']['id']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Grupo'), array('action' => 'edit', $grupo['Grupo']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Grupo'), array('action' => 'delete', $grupo['Grupo']['id']), null, __('Are you sure you want to delete # %s?', $grupo['Grupo']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Grupos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Grupo'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Usuarios'), array('controller' => 'usuarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Usuario'), array('controller' => 'usuarios', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Usuarios');?></h3>
	<?php if (!empty($grupo['Usuario'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Grupo Id'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($grupo['Usuario'] as $usuario): ?>
		<tr>
			<td><?php echo $usuario['id'];?></td>
			<td><?php echo $usuario['grupo_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'usuarios', 'action' => 'view', $usuario['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'usuarios', 'action' => 'edit', $usuario['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'usuarios', 'action' => 'delete', $usuario['id']), null, __('Are you sure you want to delete # %s?', $usuario['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Usuario'), array('controller' => 'usuarios', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>

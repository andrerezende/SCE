<div class="regimeCursos view">
<h2><?php  echo __('Regime Curso');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($regimeCurso['RegimeCurso']['id']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Regime Curso'), array('action' => 'edit', $regimeCurso['RegimeCurso']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Regime Curso'), array('action' => 'delete', $regimeCurso['RegimeCurso']['id']), null, __('Are you sure you want to delete # %s?', $regimeCurso['RegimeCurso']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Regime Cursos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Regime Curso'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cursos'), array('controller' => 'cursos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Curso'), array('controller' => 'cursos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Cursos');?></h3>
	<?php if (!empty($regimeCurso['Curso'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Campus Id'); ?></th>
		<th><?php echo __('Modalidade Id'); ?></th>
		<th><?php echo __('Turno Id'); ?></th>
		<th><?php echo __('Regime Curso Id'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($regimeCurso['Curso'] as $curso): ?>
		<tr>
			<td><?php echo $curso['id'];?></td>
			<td><?php echo $curso['campus_id'];?></td>
			<td><?php echo $curso['modalidade_id'];?></td>
			<td><?php echo $curso['turno_id'];?></td>
			<td><?php echo $curso['regime_curso_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'cursos', 'action' => 'view', $curso['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'cursos', 'action' => 'edit', $curso['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'cursos', 'action' => 'delete', $curso['id']), null, __('Are you sure you want to delete # %s?', $curso['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Curso'), array('controller' => 'cursos', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>

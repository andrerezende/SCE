<div class="modalidadeCursos view">
<h2><?php  echo __('Modalidade Curso');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($modalidadeCurso['ModalidadeCurso']['id']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Modalidade Curso'), array('action' => 'edit', $modalidadeCurso['ModalidadeCurso']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Modalidade Curso'), array('action' => 'delete', $modalidadeCurso['ModalidadeCurso']['id']), null, __('Are you sure you want to delete # %s?', $modalidadeCurso['ModalidadeCurso']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Modalidade Cursos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Modalidade Curso'), array('action' => 'add')); ?> </li>
	</ul>
</div>

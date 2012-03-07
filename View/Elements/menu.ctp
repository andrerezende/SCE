<div class="actions">
	<h3><?php echo __('Menu'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Perguntas'), array('controller' => 'perguntas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Respostas'), array('controller' => 'respostas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Usuários'), array('controller' => 'usuarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Campi'), array('controller' => 'campus', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Alunos'), array('controller' => 'alunos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Cursos'), array('controller' => 'cursos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Regime Cursos'), array('controller' => 'regime_cursos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Turnos'), array('controller' => 'turnos', 'action' => 'index')); ?> </li>
	</ul>
</div>
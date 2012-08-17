<div class="span3">
	<div class="well sidebar-nav">
		<ul class="nav nav-list">
			<li class="nav-header"><i class="icon-folder-open"></i> Menu</li>
			<li><?php echo $this->Html->link(__('Preencher Formulário'), array('controller' => 'alunos', 'action' => 'passo_um')); ?> </li>
			<li><?php echo $this->Html->link(__('Alunos'), array('controller' => 'alunos', 'action' => 'index')); ?> </li>
			<?php if (isset($userData) && $userData['Usuario']['perfil'] == 'admin'):?>
				<li class="nav-header"><i class="icon-lock"></i> Administração</li>
				<li><?php echo $this->Html->link(__('Anos de Questionários'), array('controller' => 'ano_questionarios', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('Perguntas'), array('controller' => 'perguntas', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('Respostas'), array('controller' => 'respostas', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('Campi'), array('controller' => 'campus', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('Cursos'), array('controller' => 'cursos', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('Modalidade dos Cursos'), array('controller' => 'modalidade_cursos', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('Regime dos Cursos'), array('controller' => 'regime_cursos', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('Turnos'), array('controller' => 'turnos', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('Usuários'), array('controller' => 'usuarios', 'action' => 'index')); ?> </li>
				<li class="nav-header"><i class="icon-folder-open"></i> Relatórios</li>
				<li><?php echo $this->Html->link(__('Exportação completa (excel)'), array('controller' => 'relatorios', 'action' => 'exportacao_completa')); ?> </li>
				<li><?php echo $this->Html->link(__('Respostas (excel)'), array('controller' => 'relatorios', 'action' => 'exportacao_respostas')); ?> </li>
			<?php endif;?>
		</ul>
	</div>
</div>

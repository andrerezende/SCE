<div class="navbar navbar-fixed-top">
	<div class="navbar-inner">
		<div class="container-fluid">
			<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</a>
			<?php echo $this->Html->link('Formulário de Avaliação Socioeconomica', '/', array('class' => 'brand'));?>
			<div class="nav-collapse">
				<div class="nav-collapse">
					<p class="navbar-text pull-left">Ano padrão: <?php echo $anoPadrao['AnoQuestionario']['descricao'];?> <i class="icon-info-sign icon-white"></i></p>
					<ul class="nav pull-right">
						<?php if (isset($userData) && !empty($userData)) :?>
							<li>
								<p class="navbar-text">
									<i class="icon-user icon-white"></i> <?php echo $this->Html->link($userData['login'], array('controller' => 'usuarios', 'action' => 'edit', $userData['id']));?>
								</p>
							</li>
							<li class="divider-vertical"></li>
							<li><p class="navbar-text"><i class="icon-off icon-white"></i> <?php echo $this->Html->link('Sair', array('controller' => 'usuarios', 'action' => 'logout'));?></p></li>
						<?php else:?>
							<li class="divider-vertical"></li>
							<li><?php echo $this->Html->link('Entrar', array('controller' => 'usuarios', 'action' => 'login'));?></li>
						<?php endif;?>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>

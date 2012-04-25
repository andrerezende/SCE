<div class="navbar navbar-fixed-top">
	<div class="navbar-inner">
		<div class="container-fluid">
			<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</a>
			<?php echo $this->Html->link('Sistema Socioeconômico para Estudantes', '/', array('class' => 'brand'));?>
			<div class="nav-collapse">
				<div class="nav-collapse">
					<ul class="nav pull-right">
						<?php if (isset($userData) && !empty($userData)) :?>
							<li>
								<p class="navbar-text">
									Logado como <?php echo $this->Html->link($userData['login'], array('controller' => 'usuarios', 'action' => 'edit', $userData['id']));?>
								</p>
							</li>
							<li class="divider-vertical"></li>
							<li><?php echo $this->Html->link('Sair', array('controller' => 'usuarios', 'action' => 'logout'));?></li>
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
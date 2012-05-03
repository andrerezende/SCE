<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<?php echo $this->Html->charset(); ?>
		<title>
			<?php echo __('Formulário de Avaliação Socioeconômica'); ?>
			<?php echo $title_for_layout; ?>
		</title>
		<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css(array(
			'cake.generic',
			'bootstrap',
			'bootstrap-responsive',
		));
		echo $this->Html->script(array(
			'jquery',
			'jquery.maskedinput',
			'bootstrap',
		));

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
		?>
		<style type="text/css">
			body {
				padding-top: 20px;
				padding-bottom: 60px;
			}
			.sidebar-nav {
				padding: 9px 0;
			}
		</style>
	</head>
	<body>
		<?php echo $this->element('nav');?>
		<div id="container">
			<div id="content">
				<?php echo $this->Session->flash(); ?>
				<?php echo $this->Session->flash('auth'); ?>

				<?php echo $this->element('menu');?>

				<?php echo $this->fetch('content'); ?>
			</div>
			<?php echo $this->element('footer');?>
		</div>
	</body>
	<?php echo $this->Js->writeBuffer();?>
</html>
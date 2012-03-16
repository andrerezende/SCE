<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
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
</head>
<body>
	<?php echo $this->element('nav');?>
	<div id="container">
		<div id="content">
			<?php echo $this->Session->flash(); ?>
			<?php echo $this->Session->flash('auth'); ?>

			<?php echo $this->fetch('content'); ?>

			<?php echo $this->element('menu');?>
		</div>
		<?php echo $this->element('footer');?>
	</div>
</body>
</html>
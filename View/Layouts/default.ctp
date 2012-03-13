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

	echo $this->Html->css('cake.generic');
	echo $this->Html->script(array(
		'jquery',
		'jquery.maskedinput',
	));

	echo $this->fetch('meta');
	echo $this->fetch('css');
	echo $this->fetch('script');
	?>
</head>
<body>
	<div id="container">
		<div id="content">

			<?php echo $this->Session->flash(); ?>
			<?php echo $this->Session->flash('auth'); ?>

			<?php echo $this->fetch('content'); ?>

			<?php echo $this->element('menu');?>
		</div>
		<div id="footer">
			<p>
			Instituto Federal de Educação, Ciência e Tecnologia Baiano - CNPJ: 10.724.903/0001-79<br />
			Endereço: Rua do Rouxinol, 115 - Bairro: Imbuí. CEP: 41.720-052 - Salvador/BA<br />
			Telefone: (71)3186-0001 Fax:(71)3186-0011<br />
			Reitor: Sebastião Edson Moura - E-mail: gabinete@ifbaiano.edu.br<br />
			Endereço provisório: Av. Paulo VI, 642 - Bairro: Pituba. CEP: 41.810-001 - Salvador/BA<br />
			</p>
		</div>
	</div>
</body>
</html>
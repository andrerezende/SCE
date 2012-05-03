<div class="span9">
<h2><?php  echo __('Usuario');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ativo'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['ativo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Perfil'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['perfil']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Login'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['login']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Senha'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['senha']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
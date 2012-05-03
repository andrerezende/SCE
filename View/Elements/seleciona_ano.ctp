<div class="span9">
	<?php
	echo $this->Form->create(null);
	echo $this->Form->input('ano_questionario_id', array('value' => $padrao['AnoQuestionario']['id'], 'options' => $anoQuestionarios, 'label' => 'Ano do Questionário'));
	echo $this->Form->end(__('Próximo'));
	?>
</div>

<div class="alunos index">
	<ol>
		<?php
		$i = 0;
		echo $this->Form->create('Aluno');
		echo $this->Form->input('Aluno.id', array('value' => $this->params->named['aluno_id'], 'type' => 'hidden'));
			foreach ($perguntas as $pergunta) :
				
				$options = array();
				foreach ($pergunta['Resposta'] as $resposta) {
					$options += array(
						$resposta['id'] => $resposta['descricao']
					);
				}
		?>
				<li><?php echo $this->Form->input('AlunoResposta.' .$i++. '.resposta_id' , array('legend' => $pergunta['Pergunta']['descricao'], 'type' => 'radio', 'options' => $options, 'hiddenField' => false));?></li>
		<?php
			endforeach;
		echo $this->Form->end(__('Submit'));
		?>
	</ol>
</div>
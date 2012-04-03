<div class="alunos form">
<?php
echo $this->Form->create(null);
echo $this->Form->input('qtdFamiliares', array('label' => 'Quantidade de Familiares que moram com você no mesmo lar', 'class' => 'input-mini'));
echo $this->Form->end(__('Próximo'));
?>
</div>
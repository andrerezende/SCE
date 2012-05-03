<script type="text/javascript">
	$.fn.addItems = function(data) {
		return this.each(function() {
			var list = $(this);
			list.empty();
			if (data.length != []) {
				$.each(data, function(index, text) {
					list.append("<option value="+index+">"+text+"</option>");
				});
			} else {
				list.append("<option>Nenhuma pergunta encontrada</option>");
			}
		});
	};
	$.fn.changeHandler = function(options) {
		var opts = $.extend({}, $.fn.changeHandler.defaults, options);
		this.bind("change", opts, function(event) {
			var selected = $("option:selected", this).val();
			var postData = {};
			postData[event.data.postName] = selected;
			$.ajax({
				type: "POST",
				url: event.data.url,
				data: postData,
				success: function(data) {
					$(event.data.updateId).addItems(data);
					$(event.data.updateId).removeAttr('disabled');
				}
			});
			return false;
		});
	};
	$(document).ready(function() {
		$("#RespostaAno").changeHandler({
			url: "/perguntas/get_perguntas_by_ano.json",
			updateId: "#RespostaPerguntaId",
			postName: "data[AnoQuestionario][id]"
		});
	});
</script>
<div class="span9">
<?php echo $this->Form->create('Resposta');?>
	<fieldset>
		<legend><?php echo __('Add Resposta'); ?></legend>
	<?php
	if (isset($this->params->named['pergunta_id'])) {
		echo $this->Form->input('pergunta_id', array('value' => $this->params->named['pergunta_id']));
	} else {
		echo $this->Form->input('ano', array('options' => $anos, 'value' => $padrao['AnoQuestionario']['id']));
		echo $this->Form->input('pergunta_id', array('empty' => 'Selecione'));
	}
	echo $this->Form->input('descricao', array('label' => 'Descrição'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>

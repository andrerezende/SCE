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
<div class="respostas form">
<?php echo $this->Form->create('Resposta');?>
	<fieldset>
		<legend><?php echo __('Edit Resposta'); ?></legend>
	<?php
	echo $this->Form->input('id');
	echo $this->Form->input('ano', array('options' => $anos));
	echo $this->Form->input('pergunta_id');
	echo $this->Form->input('descricao');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>

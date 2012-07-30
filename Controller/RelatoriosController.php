<?php
class RelatoriosController extends AppController {
	public $layout = false;

	public $helpers = array('CakePtbr.Formatacao');

	public function beforeFilter() {
		parent::beforeFilter();
		$this->response->header(array('Content-Type' => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet; charset=UTF-8'));
		$this->response->header(array('Content-Disposition' => 'attachment;filename="' . $this->action . '.xls"'));
	}

	public function exportacao_completa() {
		$this->set('data', $this->Relatorio->query('
			SELECT
	--cu.id AS curso_id,
	cu.nome AS curso,
	--mc.id AS modalidade_id,
	mc.descricao AS modalidade,
	--tu.id AS turno_id,
	tu.descricao AS turno,
	--al.id AS aluno_id,
	al.nome AS aluno,
	al.matricula,
	al.rg,
	al.orgao_expedidor,
	al.cpf,
	al.sexo,
	al.estado_civil,
	al.data_nascimento,
	al.endereco,
	al.telefone,
	al.celular,
	al.cep,
	al.cidade_estado,
	al.ponto_referencia,
	al.etnia,
	al.religiao,
	al.necessidade_especial,

	(CASE
		WHEN al.doenca_hereditaria = \'t\' THEN \'Sim\'
		WHEN al.doenca_hereditaria = \'f\' THEN \'Não\'
	END) AS doenca_hereditaria,

	(CASE
		WHEN al.remedio_controlado = \'t\' THEN \'Sim\'
		WHEN al.remedio_controlado = \'f\' THEN \'Não\'
	END) AS remedio_controlado,

	al.tipo_sanguineo,

	(CASE
		WHEN al.fator_rh = \'t\' THEN \'+\'
		WHEN al.fator_rh = \'f\' THEN \'-\'
	END) AS fator_rh,

	--al.regime_curso_id,
	rc.descricao AS regime_curso,
	al.faixa_etaria,

	--pe.id AS pergunta_id,
	pe.descricao AS pergunta,
	--re.id AS resposta_id,
	re.descricao AS resposta,
	aq.descricao AS ano_questionario
FROM
	curso cu,
	modalidade_curso mc,
	turno tu,
	regime_curso rc,
	aluno al,
	pergunta pe,
	resposta re,
	ano_questionario aq,
	aluno_resposta ar
WHERE
	cu.id = al.curso_id
AND	mc.id = cu.modalidade_id
AND	tu.id = cu.turno_id
AND	rc.id = al.regime_curso_id
AND	al.id = ar.aluno_id
AND	re.id = ar.resposta_id
AND	pe.id = re.pergunta_id
AND	aq.id = pe.ano_questionario_id

ORDER BY aluno_id, re.pergunta_id
		'));
	}

}
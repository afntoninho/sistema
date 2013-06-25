<?php

class Application_Model_Ocorrencia
{
    protected $_id;
    protected $_dataOcorrencia;
    protected $_irradiacao;
    protected $_chegadaLocal;
    protected $_terminoLocal;
    protected $_chegadaDP;
    protected $_terminoDP;
    protected $_tempoResposta;
    protected $_tempoLocal;
    protected $_deslocamentoDP;
    protected $_tempoDP;
    protected $_tempoTotal;
    protected $_natureza;
    protected $_endereco;
    protected $_guarnicao;
    protected $_origemPolicialmento;
    protected $_ciade;
    protected $_desfecho;
    protected $_numBO;
    protected $_numTC;
    protected $_numAPF;
    protected $_numPAAI;
    protected $_pessoa;
    protected $_sexoParticipacao;
    protected $_observacao;
    
    public function setId($id) {
        $this->_id = $id;
    }
    public function getId() {
        return $this->_id;
    }
    
    public function setData(Zend_Date $date) {
        $this->_dataOcorrencia = $date;
    }
    public function getData() {
        return $this->_dataOcorrencia;
    }
    
    public function setIrradiacao(Zend_Date $irradiacao) {
        $this->_irradiacao = $irradiacao;
    }
    public function getIrradiacao() {
        return $this->_irradiacao;
    }
    
    public function setChegadaLocal(Zend_Date $chegadaLocal) {
        $this->_chegadaLocal = $chegadaLocal;
    }
    public function getChegadaLocal() {
        return $this->_chegadaLocal;
    }
    
    public function setTerminoLocal(Zend_Date $terminoLocal) {
        $this->_terminoLocal = $terminoLocal;
    }
    public function getTerminoLocal() {
        return $this->_terminoLocal;
    }
    
    public function setChegadaDP(Zend_Date $chegadaDP) {
        $this->_chegadaDP = $chegadaDP;
    }
    public function getChegadaDP() {
        return $this->_chegadaDP;
    }
    
    public function setTerminoDP(Zend_Date $terminoDP) {
        $this->_terminoDP = $terminoDP;
    }
    public function getTerminoDP() {
        return $this->_terminoDP;
    }
    
    public function setTempoResposta(Zend_Date $tempoResposta) {
        $this->_tempoResposta = $tempoResposta;
    }
    public function getTempoResposta() {
        return $this->_tempoResposta;
    }
    
    public function setTempoLocal(Zend_Date $tempoLocal) {
        $this->_tempoLocal = $tempoLocal;
    }
    public function getTempoLocal() {
        return $this->_tempoLocal;
    }
    
    public function setDeslocamentoDp(Zend_Date $deslocamentoDp) {
        $this->_deslocamentoDP = $deslocamentoDp;
    }
    public function getDeslocamentoDp() {
        return $this->_deslocamentoDP;
    }
    
    public function setTempoDp(Zend_Date $tempoDp) {
        $this->_tempoDP = $tempoDp;
    }
    public function getTempoDp() {
        return $this->_tempoDP;
    }
    
    public function setTempoTotal(Zend_Date $tempoTotal) {
        $this->_tempoTotal = $tempoTotal;
    }
    public function getTempoTotal() {
        return $this->_tempoTotal;
    }
    
    public function setNatureza($natureza) {
        $this->_natureza = $natureza;
    }
    public function getNatureza() {
        return $this->_natureza;
    }
    
    public function setEndereco($endereco) {
        $this->_endereco = $endereco;
    }
    public function getEndereco() {
        return $this->_endereco;
    }
    
    public function setGuarnicao($guarnicao) {
        $this->_guarnicao = $guarnicao;
    }
    public function getGuarnicao() {
        return $this->_guarnicao;
    }
    
    public function setOrigemPoliciamento($policiamento) {
        $this->_origemPolicialmento = $policiamento;
    }
    public function getOrigemPoliciamento() {
        return $this->_origemPolicialmento;
    }
    
    public function setCiade($ciade) {
        $this->_ciade = $ciade;
    }
    public function getCiade() {
        return $this->_ciade;
    }
    
    public function setDesfecho($desfecho) {
        $this->_desfecho = $desfecho;
    }
    public function getDesfecho() {
        return $this->_desfecho;
    }
    
    public function setBo($bo) {
        $this->_numBO = $bo;
    }
    public function getBo() {
        return $this->_numBO;
    }
    
    public function setTc($tc) {
        $this->_numTC = $tc;
    }
    public function getTc() {
        return $this->_numTC;
    }
    
    public function setApf($apf) {
        $this->_numAPF = $apf;
    }
    public function getApf() {
        return $this->_numAPF;
    }
    
    public function setPaai($paai) {
        $this->_numPAAI = $paai;
    }
    public function getPaai() {
        return $this->_numPAAI;
    }
    
    public function setPessoa($pessoa) {
        $this->_pessoa = $pessoa;
    }
    public function getPessoa() {
        return $this->_pessoa;
    }
    
    public function setParticipacao($participacao) {
        $this->_sexoParticipacao = $participacao;
    }
    public function getParticipacao() {
        return $this->_sexoParticipacao;
    }
    
    public function setObservacao($observacao) {
        $this->_observacao = $observacao;
    }
    public function getObservacao() {
        return $this->_observacao;
    }
}
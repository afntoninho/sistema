<?php

class Application_Model_Endereco
{
    protected $_id;
    protected $_idOcorrencia;
    protected $_subArea;
    protected $_setor;
    protected $_complemento;
    
    public function setId($id) {
        $this->_id = $id;
    }
    public function getId() {
        return $this->_id;
    }
    
    public function setIdOcorrencia($idOcorrencia) {
        $this->_idOcorrencia = $idOcorrencia;
    }
    public function getIdOcorrencia() {
        return $this->_idOcorrencia;
    }
    
    public function setSubArea($subArea) {
        $this->_subArea = $subArea;
    }
    public function getSubArea() {
        return $this->_subArea;
    }
    
    public function setSetor($setor) {
        $this->_setor = $setor;
    }
    public function getSetor() {
        return $this->_setor;
    }
    
    public function setComplemento($complemento) {
        $this->_complemento = $complemento;
    }
    public function getComplemento() {
        return $this->_complemento;
    }


}


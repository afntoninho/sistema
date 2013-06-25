<?php

class Application_Model_Policial
{
    private $_id;
    private $_nome;
    private $_matricula;
    private $_patente;
    private $_nomeGuerra;
    
    
    public function getId() {
        return $this->_id;
    }
    public function setId($id) {
        $this->_id = $id;
    }

    public function getNome() {
        return $this->_nome;
    }
    public function setNome($nome) {
        $this->_nome = $nome;
    }
    
    public function getMatricula() {
        return $this->_matricula;
    }
    public function setMatricula($matricula) {
        $this->_matricula = $matricula;
    }
    
    public function getPatente() {
        return $this->_patente;
    }
    public function setPatente($patente) {
        $this->_patente = $patente;
    }
    
    public function getNomeGuerra() {
        return $this->_nomeGuerra;
    }
    public function setNomeGuerra($nomeGuerra) {
        $this->_nomeGuerra = $nomeGuerra;
    }
}


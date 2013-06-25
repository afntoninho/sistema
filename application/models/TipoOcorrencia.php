<?php

class Application_Model_TipoOcorrencia
{
    private $_id;
    private $_codNatureza;
    private $_natureza;
    
    public function setId($id) {
        $this->_id = $id;
    }
    public function getId() {
        return $this->_id;
    }
    
    public function setCodNatureza($codNatureza) {
        $this->_codNatureza = $codNatureza;
    }
    public function getCodNatureza() {
        return $this->_codNatureza;
    }
    
    public function setNatureza($natureza) {
        $this->_natureza = $natureza;
    }
    public function getNatureza() {
        return $this->_natureza;
    }

}


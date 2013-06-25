<?php

class Application_Model_TipoOcorrenciaMapper
{
    public function fetchAll() {
        $tipoOcorrencias = $this->getDbTable()->fetchAll();
        $result = array();
        foreach($tipoOcorrencias as $row){
            $tipoOcorrencia = new Application_Model_TipoOcorrencia();
            $tipoOcorrencia->setId($row->id_tipo_ocorrencia);
            $tipoOcorrencia->setCodNatureza($row->cod_natureza);
            $tipoOcorrencia->setNatureza($row->natureza);
            $result[] = $tipoOcorrencia;
        }
        return $result;
    }
    
    public function getDbTable() {
        if (null === $this->_dbTable) {
            $this->_dbTable = new Application_Model_DbTable_TipoOcorrencia();
        }
        return $this->_dbTable;
    }


}


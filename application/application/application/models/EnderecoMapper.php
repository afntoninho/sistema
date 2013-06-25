<?php

class Application_Model_EnderecoMapper
{
    
    public function saveOrUpdate(Application_Model_Endereco $objEndereco) {
        $data = array(
                    'id_ocorrencia' => $objEndereco->getIdOcorrencia(),
                    'sub_area'      => $objEndereco->getSubArea(),
                    'setor'         => $objEndereco->getSetor(),
                    'complemento'   => $objEndereco->getComplemento()
                     );
        $id = $objEndereco->getId();
        if (null === $id){
            unset($id);
            $this->getDbTable()->insert($data);
        }
        else {
            $this->getDbTable()->update($data, array('id_endereco = ?' => $id));
        }
    }
    
    
    public function createObject($idOcorrencia, $formEndereco) {
        $objEndereco = new Application_Model_Endereco();
        if ($formEndereco['id_endereco'] > 0) {
            $objEndereco->setId($formEndereco['id_endereco']);
        } else {
            $objEndereco->setId(null);
        }
        $objEndereco->setIdOcorrencia($idOcorrencia);
        $objEndereco->setSubArea($formEndereco['sub_area']);
        $objEndereco->setSetor($formEndereco['setor']);
        $objEndereco->setComplemento($formEndereco['complemento']);
        return $objEndereco;
    }
    
    
    public function getObject($endereco) {
        $objEndereco = new Application_Model_Endereco();
        foreach ($endereco as $row) {
            $objEndereco->setId($row->id_endereco);
            $objEndereco->setIdOcorrencia($row->id_ocorrencia);
            $objEndereco->setSetor($row->setor);
            $objEndereco->setSubArea($row->sub_area);
            $objEndereco->setComplemento($row->complemento);
        }
        return $objEndereco;
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    public function getDbTable() {
        if (null === $this->_dbTable) {
            $this->_dbTable = new Application_Model_DbTable_Endereco();
        }
        return $this->_dbTable;
    }


}


<?php

class Application_Model_PolicialMapper
{
    private $_dbTable;

    public function saveOrUpdate(Application_Model_Policial $objPolicial) {
        $data = array(
                    'nome'        => $objPolicial->getNome(),
                    'matricula'   => $objPolicial->getMatricula(),
                    'patente'     => $objPolicial->getPatente(),
                    'nome_guerra' => $objPolicial->getNomeGuerra()
                     );
        $id = $objPolicial->getId();
        if (null === $id){
            unset($id);
            $this->getDbTable()->insert($data);
        }
        else {
            $this->getDbTable()->update($data, array('id_policial = ?' => $id));
        }
    }

    public function find($id) {
        $result = $this->getDbTable()->find($id)->current();
        if (!$result) {
            throw TException('Não encontrou resultado');
        } else {
            $objPolicial = new Application_Model_Policial();
            $objPolicial->setId($result->id_policial);
            $objPolicial->setNome($result->nome);
            $objPolicial->setMatricula($result->matricula);
            $objPolicial->setPatente($result->patente);
            $objPolicial->setNomeGuerra($result->nome_guerra);
            return $objPolicial;
        }
    }
    
    public function fetchAll() {
        $policiais = $this->getDbTable()->fetchAll();
        $result = array();
        foreach($policiais as $policial){
            $objPolicial = new Application_Model_Policial();
            $objPolicial->setId($policial->id_policial);
            $objPolicial->setNome($policial->nome);
            $objPolicial->setMatricula($policial->matricula);
            $objPolicial->setPatente($policial->patente);
            $objPolicial->setNomeGuerra($policial->nome_guerra);
            $result[] = $objPolicial;
        }
        return $result;
    }
    
    public function createObject(Application_Form_Policial $form) {
        $objPolicial = new Application_Model_Policial();
        if ($form->getValue('id_policial') > 0) {
            $objPolicial->setId($form->getValue('id_policial'));
        } else {
            $objPolicial->setId(null);
        }
        $objPolicial->setNome($form->getValue('nome'));
        $objPolicial->setMatricula($form->getValue('matricula'));
        $objPolicial->setPatente($form->getValue('patente'));
        $objPolicial->setNomeGuerra($form->getValue('nome_guerra'));
        return $objPolicial;
    }

    public function getDbTable() {
        if (null === $this->_dbTable) {
            $this->_dbTable = new Application_Model_DbTable_Policial();
        }
        return $this->_dbTable;
    }


}
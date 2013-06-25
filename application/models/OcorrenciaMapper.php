<?php

class Application_Model_OcorrenciaMapper
{
    private $_dbTable;
    
    public function saveOrUpdate(Application_Model_Ocorrencia $objOcorrencia) {
        $data = array(
                    'data_ocorrencia'     => $objOcorrencia->getData()->get('yyyy-MM-dd'),
                    'irradiacao'          => $objOcorrencia->getIrradiacao()->get(Zend_Date::TIMES),
                    'chegada_local'       => $objOcorrencia->getChegadaLocal()->get(Zend_Date::TIMES),
                    'termino_local'       => $objOcorrencia->getTerminoLocal()->get(Zend_Date::TIMES),
                    'chegada_dp'          => $objOcorrencia->getChegadaDP()->get(Zend_Date::TIMES),
                    'termino_dp'          => $objOcorrencia->getTerminoDP()->get(Zend_Date::TIMES),
                    'tempo_resposta'      => $objOcorrencia->getTempoResposta()->get(Zend_Date::TIMES),
                    'tempo_local'         => $objOcorrencia->getTempoLocal()->get(Zend_Date::TIMES),
                    'deslocamento_dp'     => $objOcorrencia->getDeslocamentoDp()->get(Zend_Date::TIMES),
                    'tempo_dp'            => $objOcorrencia->getTempoDp()->get(Zend_Date::TIMES),
                    'tempo_total'         => $objOcorrencia->getTempoTotal()->get(Zend_Date::TIMES),
                    'origem_policiamento' => $objOcorrencia->getOrigemPoliciamento(),
                    'ciade'               => $objOcorrencia->getCiade(),
                    'desfecho'            => $objOcorrencia->getDesfecho(),
                    'bo'                  => $objOcorrencia->getBo(),
                    'tc'                  => $objOcorrencia->getTc(),
                    'apf'                 => $objOcorrencia->getApf(),
                    'paai'                => $objOcorrencia->getPaai(),
                    'observacao'          => $objOcorrencia->getObservacao(),
                     );
        $id = $objOcorrencia->getId();
        if (null === $id){
            unset($id);
            $idOcorrencia = $this->getDbTable()->insert($data);
            $this->saveOrUpdateEndereco($idOcorrencia, $objOcorrencia->getEndereco());
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
            $objOcorrencia = new Application_Model_Ocorrencia();
            $objOcorrencia->setId($result->id_ocorrencia);
            $objOcorrencia->setData(new Zend_Date($result->data_ocorrencia));
            $objOcorrencia->setIrradiacao(new Zend_Date($result->irradiacao, Zend_Date::TIMES));
            $objOcorrencia->setChegadaLocal(new Zend_Date($result->chegada_local, Zend_Date::TIMES));
            $objOcorrencia->setTerminoLocal(new Zend_Date($result->termino_local, Zend_Date::TIMES));
            $objOcorrencia->setChegadaDP(new Zend_Date($result->chegada_dp, Zend_Date::TIMES));
            $objOcorrencia->setTerminoDP(new Zend_Date($result->termino_dp, Zend_Date::TIMES));
            $objOcorrencia->setTempoResposta(new Zend_Date($result->tempo_resposta, Zend_Date::TIMES));
            $objOcorrencia->setTempoLocal(new Zend_Date($result->tempo_local, Zend_Date::TIMES));
            $objOcorrencia->setDeslocamentoDp(new Zend_Date($result->deslocamento_dp, Zend_Date::TIMES));
            $objOcorrencia->setTempoDp(new Zend_Date($result->tempo_dp, Zend_Date::TIMES));
            $objOcorrencia->setTempoTotal(new Zend_Date($result->tempo_total, Zend_Date::TIMES));
            $objOcorrencia->setEndereco($this->findEndereco($result->id_ocorrencia));
            $objOcorrencia->setCiade($result->ciade);
            $objOcorrencia->setDesfecho($result->desfecho);
            $objOcorrencia->setApf($result->apf);
            $objOcorrencia->setBo($result->bo);
            $objOcorrencia->setObservacao($result->observacao);
            $objOcorrencia->setOrigemPoliciamento($result->origem_policiamento);
            $objOcorrencia->setPaai($result->paai);
            $objOcorrencia->setTc($result->tc);
            return $objOcorrencia;
        }
    }


    public function fetchAll() {
        $ocorrencias = $this->getDbTable()->fetchAll();
        $result = array();
        foreach($ocorrencias as $ocorrencia){
            $objOcorrencia = new Application_Model_Ocorrencia();
            $objOcorrencia->setId($ocorrencia->id_ocorrencia);
            $objOcorrencia->setData(new Zend_Date($ocorrencia->data_ocorrencia));
            $objOcorrencia->setIrradiacao(new Zend_Date($ocorrencia->irradiacao, Zend_Date::TIMES));
            $objOcorrencia->setChegadaLocal(new Zend_Date($ocorrencia->chegada_local, Zend_Date::TIMES));
            $objOcorrencia->setTerminoLocal(new Zend_Date($ocorrencia->termino_local, Zend_Date::TIMES));
            $objOcorrencia->setChegadaDP(new Zend_Date($ocorrencia->chegada_dp, Zend_Date::TIMES));
            $objOcorrencia->setTerminoDP(new Zend_Date($ocorrencia->termino_dp, Zend_Date::TIMES));
            $objOcorrencia->setTempoResposta(new Zend_Date($ocorrencia->tempo_resposta, Zend_Date::TIMES));
            $objOcorrencia->setTempoLocal(new Zend_Date($ocorrencia->tempo_local, Zend_Date::TIMES));
            $objOcorrencia->setDeslocamentoDp(new Zend_Date($ocorrencia->deslocamento_dp, Zend_Date::TIMES));
            $objOcorrencia->setTempoDp(new Zend_Date($ocorrencia->tempo_dp, Zend_Date::TIMES));
            $objOcorrencia->setTempoTotal(new Zend_Date($ocorrencia->tempo_total, Zend_Date::TIMES));
            $objOcorrencia->setEndereco($this->findEndereco($ocorrencia->id_ocorrencia));
            $objOcorrencia->setCiade($ocorrencia->ciade);
            $objOcorrencia->setDesfecho($ocorrencia->desfecho);
            $objOcorrencia->setApf($ocorrencia->apf);
            $objOcorrencia->setBo($ocorrencia->bo);
            $objOcorrencia->setObservacao($ocorrencia->observacao);
            $objOcorrencia->setOrigemPoliciamento($ocorrencia->origem_policiamento);
            $objOcorrencia->setPaai($ocorrencia->paai);
            $objOcorrencia->setTc($ocorrencia->tc);
            $result[] = $objOcorrencia;
        }
        return $result;
    }
    
    public function createObject(Application_Form_Ocorrencia $form) {
        $objOcorrencia = new Application_Model_Ocorrencia();
        if ($form->getValue('id_ocorrencia') > 0) {
            $objOcorrencia->setId($form->getValue('id_ocorrencia'));
        } else {
            $objOcorrencia->setId(null);
        }
        $objOcorrencia->setData(new Zend_Date($form->getValue('data')));
        $objOcorrencia->setIrradiacao(new Zend_Date($form->getValue('irradiacao'), Zend_Date::TIMES));
        $objOcorrencia->setChegadaLocal(new Zend_Date($form->getValue('chegada_local'), Zend_Date::TIMES));
        $objOcorrencia->setTerminoLocal(new Zend_Date($form->getValue('termino_local'), Zend_Date::TIMES));
        $objOcorrencia->setChegadaDP(new Zend_Date($form->getValue('chegada_dp'), Zend_Date::TIMES));
        $objOcorrencia->setTerminoDP(new Zend_Date($form->getValue('termino_dp'), Zend_Date::TIMES));
        $objOcorrencia->setTempoResposta($this->calculaIntervalo($objOcorrencia->getIrradiacao(), $objOcorrencia->getChegadaLocal()));
        $objOcorrencia->setTempoLocal($this->calculaIntervalo($objOcorrencia->getChegadaLocal(), $objOcorrencia->getTerminoLocal()));
        $objOcorrencia->setDeslocamentoDp($this->calculaIntervalo($objOcorrencia->getTerminoLocal(), $objOcorrencia->getChegadaDP()));
        $objOcorrencia->setTempoDp($this->calculaIntervalo($objOcorrencia->getChegadaDP(), $objOcorrencia->getTerminoDP()));
        $objOcorrencia->setTempoTotal($this->calculaIntervalo($objOcorrencia->getIrradiacao(), $objOcorrencia->getTerminoDP()));
        $objOcorrencia->setEndereco(array(
                                          'id_endereco' => $form->getValue('id_endereco'),
                                          'sub_area'    => $form->getValue('sub_area'),
                                          'setor'       => $form->getValue('setor'),
                                          'complemento' => $form->getValue('complemento')
                                          ));
        $objOcorrencia->setOrigemPoliciamento($form->getValue('prefixo'));
        $objOcorrencia->setCiade($form->getValue('ciade'));
        $objOcorrencia->setDesfecho($form->getValue('dp'));
        $objOcorrencia->setBo($form->getValue('bo'));
        $objOcorrencia->setTc($form->getValue('tc'));
        $objOcorrencia->setApf($form->getValue('flagrante'));
        $objOcorrencia->setPaai($form->getValue('paai'));
        $objOcorrencia->setObservacao($form->getValue('observacao'));
        return $objOcorrencia;
    }
    
    public function findEndereco($idOcorrencia) {
        $result = $this->getDbTable()->find($idOcorrencia)->current();
        $endereco = $result->findDependentRowset('Application_Model_DbTable_Endereco');
        $objEndereco = new Application_Model_EnderecoMapper();
        return $objEndereco->getObject($endereco);
    }
    
    private function saveOrUpdateEndereco($idOcorrencia, $endereco) {
        $objEndereco = new Application_Model_EnderecoMapper();
        $objEndereco->saveOrUpdate($objEndereco->createObject($idOcorrencia, $endereco));
        
    }


    public function calculaIntervalo(Zend_Date $hora1, Zend_Date $hora2) {
        $emSegundos = $hora2->getTimestamp() - $hora1->getTimestamp();
        return new Zend_Date($emSegundos);
    }

    public function getDbTable() {
        if (null === $this->_dbTable) {
            $this->_dbTable = new Application_Model_DbTable_Ocorrencia();
        }
        return $this->_dbTable;
    }


}
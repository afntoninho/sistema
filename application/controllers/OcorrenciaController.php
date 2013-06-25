<?php

class OcorrenciaController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        $ocorrencias = new Application_Model_OcorrenciaMapper();
        $this->view->ocorrencias = $ocorrencias->fetchAll();
    }

    public function addAction()
    {
        $form = new Application_Form_Ocorrencia();
        $form->setAction('add');
        $form->submit->setLabel('Confirmar');
        $this->view->form = $form;
        
        if($this->getRequest()->isPost()) {
            $formData = $this->getRequest()->getPost();
            if($form->isValid($formData)) {
                $ocorrencia = new Application_Model_OcorrenciaMapper();
                $ocorrencia->saveOrUpdate($ocorrencia->createObject($form));
                $this->_helper->redirector('index');
            } else {
                $form->populate($formData);
            }
        }
    }

    public function editAction()
    {
        $endereco = new Application_Model_OcorrenciaMapper();
        $this->view->endereco = $endereco->findEndereco(1);
    }

    public function deleteAction()
    {
        $this->_helper->layout()->disableLayout();
        $this->_helper->viewRenderer->setNoRender();
        $objPoliciais = new Application_Model_PolicialMapper();
        $policiais = $objPoliciais->fetchAll();
        $result = array();
        foreach ($policiais as $policial) {
            $result[] = array(
                            'id_policial' => $policial->getId(),
                            'nome' => $policial->getNomeGuerra(),
                            //'matricula' => $policial->getMatricula()
                            );
        }
        echo json_encode( $result );
        //$json = Zend_Json::encode($result);
        //$this->view->policiais = $json;
        //$this->_helper->json->sendJson($json);

    }

    public function detailAction()
    {
        $ocorrencia = new Application_Model_OcorrenciaMapper();
        $this->view->ocorrencia = $ocorrencia->find($this->_request->getParam('id_ocorrencia', 0));
    }


}


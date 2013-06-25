<?php

class PolicialController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        $policiais = new Application_Model_PolicialMapper();
        $this->view->policiais = $policiais->fetchAll();
    }

    public function addAction()
    {
        $form = new Application_Form_Policial();
        $form->setAction('add');
        $form->submit->setLabel('Confirmar');
        $this->view->form = $form;
        
        if($this->getRequest()->isPost()) {
            $formData = $this->getRequest()->getPost();
            if($form->isValid($formData)) {
                $policial = new Application_Model_PolicialMapper();
                $policial->saveOrUpdate($policial->createObject($form));
                $this->_helper->redirector('index');
            } else {
                $form->populate($formData);
            }
        }
    }

    public function editAction()
    {
        $form = new Application_Form_Policial();
        $form->setAction('edit');
        $form->submit->setLabel('Salvar');
        $this->view->form = $form;
        
        $id = $this->_request->getParam('id_policial', 0);
        if($id > 0) {
            $policial = new Application_Model_PolicialMapper();
            $result = $policial->find($id);
            $data = array(
                        'id_policial' => $result->getId(),      'nome' => $result->getNome(),
                        'matricula' => $result->getMatricula(), 'patente' => $result->getPatente(),
                        'nome_guerra' => $result->getNomeGuerra()
                        );
            $form->populate($data);
        }
        if($this->getRequest()->isPost()) {
            $formData = $this->getRequest()->getPost();
            if($form->isValid($formData)) {
                $policial = new Application_Model_PolicialMapper();
                $policial->saveOrUpdate($policial->createObject($form));
                $this->_helper->redirector('index');
            }else {
                    $form->populate($formData);
            }
        }
    }

    public function deleteAction()
    {
                                
    }

    public function detailAction()
    {
        $policial = new Application_Model_PolicialMapper();
        $this->view->policial = $policial->find($this->_request->getParam('id_policial', 0));
    }
}
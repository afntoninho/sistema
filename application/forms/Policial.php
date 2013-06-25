<?php

class Application_Form_Policial extends Zend_Form
{

    public function init()
    {
        
        $this->setName('policial')
             ->setMethod('post')
             ->setAttrib('id', 'policial');
        $id = new Zend_Form_Element_Hidden('id_policial');
        $id->addFilter('Int');
        $nome = new Zend_Form_Element_Text('nome');
        $nome->setLabel('Nome:')
             ->setAttribs(array('class'=>'input-xxlarge', 'placeholder'=>'Nome Completo'))
             ->setRequired(true)
             ->addFilter('StripTags')
             ->addFilter('StringTrim');
        $matricula = new Zend_Form_Element_Text('matricula');
        $matricula->setLabel('Matricula:')
                  ->setAttribs(array('class'=>'input-medium', 'placeholder'=>'Matricula'))
                  ->setRequired(true)
                  ->addFilter('StripTags')
                  ->addFilter('StringTrim');
        $nomeGuerra = new Zend_Form_Element_Text('nome_guerra');
        $nomeGuerra->setLabel('Nome de Guerra:')
                   ->setAttribs(array('class'=>'input-xlarge', 'placeholder'=>'Nome de Guerra'))
                   ->setRequired(true)
                   ->addFilter('StripTags')
                   ->addFilter('StringTrim');
        $select = new Zend_Form_Element_Select('patente');
        $options = array(
                        'SD' => 'Soldado',
                        'CB' => 'Cabo',
                        'SGT' => 'Sargento',
                        'ST' => 'Sub Tenente'
                        );
        $select->setLabel('Patente:')
               ->setMultiOptions($options);
        
        $submit = new Zend_Form_Element_Submit('submit');
        $submit->setAttribs(array('id' => 'submitbutton', 'class' => 'btn'));
        $this->addElements(array($id, $nome, $matricula, $nomeGuerra, $select, $submit));
        
        $this->setElementDecorators(array('ViewHelper'));
        $this->setDecorators(array());
    }


}


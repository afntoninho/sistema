<?php

class Application_Form_Ocorrencia extends Zend_Form
{

    public function init()
    {
        $this->setName('ocorrencia');
        $this->setAttrib('id', 'ocorrencia');
        $this->setMethod('post');
        
        $id = new Zend_Form_Element_Hidden('id_ocorrencia');
        $id->addFilter('Int');
        
        $data = new Zend_Form_Element_Text('data');
        $data->setLabel('Data:')
             ->setAttribs(array('class'=>'input-medium', 'placeholder'=>'Data'))
             ->addFilter('StripTags')->addFilter('StringTrim');
        
        $prefixo = new Zend_Form_Element_Text('prefixo');
        $prefixo->setLabel('Prefixo:')
                ->setAttribs(array('class'=>'input-medium', 'placeholder'=>'Prefixo'))
                ->addFilter('StripTags')->addFilter('StringTrim');
        
        $ciade = new Zend_Form_Element_Text('ciade');
        $ciade->setLabel('CIADE:')
              ->setAttribs(array('class'=>'input-medium', 'placeholder'=>'CIADE'))
              ->addFilter('StripTags')->addFilter('StringTrim');
        
        $dp = new Zend_Form_Element_Text('dp');
        $dp->setLabel('DP:')
           ->setAttribs(array('class'=>'input-medium', 'placeholder'=>'DP'))
           ->addFilter('StripTags')->addFilter('StringTrim');
        
        $bo = new Zend_Form_Element_Text('bo');
        $bo->setLabel('BO:')
           ->setAttribs(array('class'=>'input-medium', 'placeholder'=>'BO'))
           ->addFilter('StripTags')->addFilter('StringTrim');
        
        $flagrante = new Zend_Form_Element_Text('flagrante');
        $flagrante->setLabel('Flagrante:')
                  ->setAttribs(array('class'=>'input-small', 'placeholder'=>'Flagrante'))
                  ->addFilter('StripTags')->addFilter('StringTrim');
        
        $tc = new Zend_Form_Element_Text('tc');
        $tc->setLabel('TC:')
           ->setAttribs(array('class'=>'input-medium', 'placeholder'=>'TC'))
           ->addFilter('StripTags')->addFilter('StringTrim');
        
        $paai = new Zend_Form_Element_Text('paai');
        $paai->setLabel('PAAI:')
             ->setAttribs(array('class'=>'input-medium', 'placeholder'=>'PAAI'))
             ->addFilter('StripTags')->addFilter('StringTrim');
        
        $natureza = new Zend_Form_Element_Select('natureza');
        $natureza->setLabel('Natureza:')
                 ->setAttribs(array('class'=>'input-xxlarge'))
                 ->addMultiOption();
        $tipoOcorrencia = new Application_Model_TipoOcorrenciaMapper();
        $tipos = $tipoOcorrencia->fetchAll();
        foreach ($tipos as $tipo) {
            $natureza->addMultiOption($tipo->getId(), $tipo->getNatureza());
        };
        
        $subArea = new Zend_Form_Element_Select('sub_area');
        $options = array(
                        'ROMEO' => 'ROMEO',
                        'SIERRA' => 'SIERRA',
                        'QUEBEC' => 'QUEBEC',
                        );
        $subArea->setLabel('Subarea:')
                ->setMultiOptions($options);
        
        $idEndereco = new Zend_Form_Element_Hidden('id_endereco');
        $idEndereco->addFilter('Int');
        
        $setor = new Zend_Form_Element_Text('setor');
        $setor->setLabel('Setor:')
                   ->setAttribs(array('placeholder'=>'Setor'))
                   ->addFilter('StripTags')->addFilter('StringTrim');
        
        $complemento = new Zend_Form_Element_Text('complemento');
        $complemento->setLabel('Complemento:')
                   ->setAttribs(array('placeholder'=>'Complemento'))
                   ->addFilter('StripTags')->addFilter('StringTrim');
        
        $irradiacao = new Zend_Form_Element_Text('irradiacao');
        $irradiacao->setLabel('Hora de Irradiação:')
                   ->setAttribs(array('class'=>'input-small', 'placeholder'=>'Hora de Irradiação'))
                   ->addFilter('StripTags')->addFilter('StringTrim');
        
        $chegadaLocal = new Zend_Form_Element_Text('chegada_local');
        $chegadaLocal->setLabel('Chegada ao Local:')
                    ->setAttribs(array('class'=>'input-small', 'placeholder'=>'Chegada ao Local'))
                    ->addFilter('StripTags')->addFilter('StringTrim');
        
        $terminoLocal = new Zend_Form_Element_Text('termino_local');
        $terminoLocal->setLabel('Término no Local:')
                    ->setAttribs(array('class'=>'input-small', 'placeholder'=>'Término no Local'))
                    ->addFilter('StripTags')->addFilter('StringTrim');
        
        $chegadaDp = new Zend_Form_Element_Text('chegada_dp');
        $chegadaDp->setLabel('Chegada a DP:')
                    ->setAttribs(array('class'=>'input-small', 'placeholder'=>'Chegada a DP'))
                    ->addFilter('StripTags')->addFilter('StringTrim');
        
        $terminoDp = new Zend_Form_Element_Text('termino_dp');
        $terminoDp->setLabel('Término DP:')
                    ->setAttribs(array('class'=>'input-small', 'placeholder'=>'Término DP'))
                    ->addFilter('StripTags')->addFilter('StringTrim');
        
        $observacao = new Zend_Form_Element_Textarea('observacao');
        $observacao->setLabel('Observação:')
                   ->setAttribs(array('class'=>'span12', 'rows'=>'3'));
        
        $submit = new Zend_Form_Element_Submit('submit');
        $submit->setAttribs(array('id' => 'submitbutton', 'class' => 'btn'));
        $this->addElements(array(
                                 $id, $data, $prefixo, $ciade, $dp, $bo, $flagrante,
                                 $tc, $paai, $irradiacao, $chegadaLocal, $terminoLocal,
                                 $chegadaDp, $terminoDp, $observacao, $submit, $natureza,
                                 $subArea, $setor, $complemento, $idEndereco
                           ));
        
        $this->setElementDecorators(array('ViewHelper'));
        $this->setDecorators(array());
    }
}
<?php

class Application_Model_DbTable_OcorrenciaTipoOcorrencia extends Zend_Db_Table_Abstract
{

    protected $_name = 'ocorrencia_tipo_ocorrencia';
    
    protected $_referenceMap = array
    (
        array(
            'refTableClass' => 'Application_Model_DbTable_Ocorrencia',
            'refColumns' => 'id_ocorrencia',
            'columns' => 'id_ocorrencia',
        ),
        array(
            'refTableClass' => 'Application_Model_DbTable_TipoOcorrencia',
            'refColumns' => 'id_tipo_ocorrencia',
            'columns' => 'id_tipo_ocorrencia',
        )
    );


}


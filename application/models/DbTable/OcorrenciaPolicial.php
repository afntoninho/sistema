<?php

class Application_Model_DbTable_OcorrenciaPolicial extends Zend_Db_Table_Abstract
{

    protected $_name = 'ocorrencia_policial';


    protected $_referenceMap = array
    (
        array(
            'refTableClass' => 'Application_Model_DbTable_Ocorrencia',
            'refColumns' => 'id_ocorrencia',
            'columns' => 'id_ocorrencia',
        ),
        array(
            'refTableClass' => 'Application_Model_DbTable_Policial',
            'refColumns' => 'id_policial',
            'columns' => 'id_policial',
        )
    );


}


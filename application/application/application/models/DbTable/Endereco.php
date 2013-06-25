<?php

class Application_Model_DbTable_Endereco extends Zend_Db_Table_Abstract
{

    protected $_name = 'endereco';
    protected $_id   = 'id_endereco';
    
    protected $_referenceMap = array
    (
        array(
            'refTableClass' => 'Application_Model_DbTable_Ocorrencia',
            'refColumns' => 'id_ocorrencia',
            'columns' => 'id_ocorrencia',
        )
    );


}


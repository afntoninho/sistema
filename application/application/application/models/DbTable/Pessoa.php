<?php

class Application_Model_DbTable_Pessoa extends Zend_Db_Table_Abstract
{

    protected $_name = 'pessoa';
    protected $_id   = 'id_pessoa';
    
    protected $_referenceMap = array
    (
        array(
            'refTableClass' => 'Application_Model_DbTable_Ocorrencia',
            'refColumns' => 'id_ocorrencia',
            'columns' => 'id_ocorrencia',
        )
    );


}


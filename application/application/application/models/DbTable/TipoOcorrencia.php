<?php

class Application_Model_DbTable_TipoOcorrencia extends Zend_Db_Table_Abstract
{

    protected $_name = 'tipo_ocorrencia';
    protected $_id   = 'id_ocorrencia';
    
    protected $_dependentTables = array ('Application_Model_DbTable_OcorrenciaTipoOcorrencia');


}


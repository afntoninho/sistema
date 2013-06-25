<?php

class Application_Model_DbTable_Ocorrencia extends Zend_Db_Table_Abstract
{

    protected $_name = 'ocorrencia';
    protected $_primary   = 'id_ocorrencia';
    
    protected $_dependentTables = array ('Application_Model_DbTable_Pessoa',
                                            'Application_Model_DbTable_Endereco',
                                            'Application_Model_DbTable_OcorrenciaTipoOcorrencia',
                                            'Application_Model_DbTable_OcorrenciaPolicial');


}


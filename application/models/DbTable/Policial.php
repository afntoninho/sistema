<?php

class Application_Model_DbTable_Policial extends Zend_Db_Table_Abstract
{

    protected $_name = 'policial';
    protected $_primary   = 'id_policial';
    
    protected $_dependentTables = array ('Application_Model_DbTable_OcorrenciaPolicial');


}


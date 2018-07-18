<?php

/**
 * @category    Decenternet
 * @package  Test
 * @copyright   Copyright (c) 2018
 * @author  Joenas Ejes
 */
class Decenternet_Test_Block_Message extends Mage_Core_Block_Template
{
    protected $_customMessage = 'Hello from Decenternet';

    public function getMessage()
    {
        return $this->_customMessage;
    }
}
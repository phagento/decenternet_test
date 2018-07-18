<?php

/**
 * @category    Decenternet
 * @package  Test
 * @copyright   Copyright (c) 2018
 * @author  Joenas Ejes
 */
class Decenternet_Test_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
        $this->loadLayout();
        $this->renderLayout();
    }

    public function printHelloAction()
    {
        $this->loadLayout();
        $this->renderLayout();
    }
}
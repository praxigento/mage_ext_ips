<?php

/**
 * Copyright (c) 2015, Praxigento
 * All rights reserved.
 */
class Praxigento_Ips_Model_Observer extends Mage_Core_Model_Observer {

    /** @var \Praxigento_Ips_Logger */
    private $_log;

    function __construct() {
        $this->_log = Praxigento_Ips_Logger::getLogger(__CLASS__);
    }
}

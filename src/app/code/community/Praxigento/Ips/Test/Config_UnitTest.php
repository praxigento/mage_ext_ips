<?php
/**
 * Copyright (c) 2015, Praxigento
 * All rights reserved.
 */
/**
 * User: Alex Gusev <alex@flancer64.com>
 */
include_once('phpunit_bootstrap.php');

/**
 * User: Alex Gusev <alex@flancer64.com>
 */
class Praxigento_Ips_Test_Config_UnitTest extends PHPUnit_Framework_TestCase
{

    public function test_cfg()
    {
        $this->assertTrue(is_bool(Praxigento_Ips_Config::cfgStoreIpsLogsEnabled()));
        $this->assertTrue(is_string(Praxigento_Ips_Config::cfgStoreIpsMerchantGuid()));
        $this->assertTrue(is_string(Praxigento_Ips_Config::cfgStoreIpsMerchantPassword()));
        $this->assertTrue(is_bool(Praxigento_Ips_Config::cfgStoreIpsProductionEnabled()));
    }
}
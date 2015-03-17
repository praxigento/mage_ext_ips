<?php
/**
 * Copyright (c) 2015, Praxigento
 * All rights reserved.
 */
/**
 * User: Alex Gusev <alex@flancer64.com>
 */
include_once('../../../phpunit_bootstrap.php');

/**
 * User: Alex Gusev <alex@flancer64.com>
 */
class Praxigento_Ips_Test_Model_Own_Service_Call_UnitTest extends PHPUnit_Framework_TestCase
{
    const MERCHANT_GUID = 'cca15e27-49a2-4191-9b5b-cc9fa3d41f5f';
    const MERCHANT_PASS = 'zNu2PEwvyP';
    const TEST_CURR = 'USD';
    const TEST_USERNAME = 'json_user_1';

    public function test_constructor()
    {
        $call = Mage::getModel('prxgt_ips_model/own_service_call');
        $this->assertNotNull($call);
    }

    public function test_getCurrencyBalance()
    {
        /** @var  $call Praxigento_Ips_Model_Own_Service_Call */
        $call = $this->_initServiceCall();

        /** @var  $req Praxigento_Ips_Model_Own_Service_GetCurrencyBalance_Request */
        $req = Mage::getModel('prxgt_ips_model/own_service_getCurrencyBalance_request');
        $req->setCurrencyCode(self::TEST_CURR);
        $req->setUserName(self::TEST_USERNAME);
        $resp = $call->getCurrencyBalance($req);
        $this->assertTrue($resp instanceof Praxigento_Ips_Model_Own_Service_GetCurrencyBalance_Response);
        $this->assertTrue($resp->isSucceed());
        $this->assertEquals(self::TEST_CURR, $resp->getCommonCurrencyCode());
        $this->assertNotNull($resp->getBalance());
    }

    /**
     * Return initialized object to perform tests.
     *
     * @return Praxigento_Ips_Model_Own_Service_Call
     */
    private function _initServiceCall()
    {
        /** @var  $result Praxigento_Ips_Model_Own_Service_Call */
        $result = Mage::getModel('prxgt_ips_model/own_service_call');
        $this->assertNotNull($result);
        $result->setIsInTestMode(true);
        $result->setMerchantGuid(self::MERCHANT_GUID);
        $result->setMerchantPassword(self::MERCHANT_PASS);
        return $result;
    }

    public function test_registerUser()
    {
        /** @var  $call Praxigento_Ips_Model_Own_Service_Call */
        $call = $this->_initServiceCall();

        /** @var  $req Praxigento_Ips_Model_Own_Service_RegisterUser_Request */
        $req = Mage::getModel('prxgt_ips_model/own_service_registerUser_request');
        $req->UserName = self::TEST_USERNAME;
        $req->FirstName = 'WSTest';
        $req->LastName = 'Test';
        $req->EmailAddress = 'user@aol.com';
        $resp = $call->registerUser($req);
        $this->assertTrue($resp instanceof Praxigento_Ips_Model_Own_Service_RegisterUser_Response);
        /* user should be created */
        $this->assertFalse($resp->isSucceed());
        $this->assertEquals(
            Praxigento_Ips_Model_Own_Base_Response::CODE_USERNAME_EXISTS,
            $resp->getCommonMessageCode()
        );
    }
}
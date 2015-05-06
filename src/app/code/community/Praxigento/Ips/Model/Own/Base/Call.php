<?php
/**
 * Copyright (c) 2015, Praxigento
 * All rights reserved.
 */

/**
 * Base class for all services calls (operations aggregations).
 *
 * User: Alex Gusev <alex@flancer64.com>
 */
abstract class Praxigento_Ips_Model_Own_Base_Call
{
    const URI_JSON_PROD = 'https://www.i-payout.net/eWalletWS/ws_JsonAdapter.aspx';
    const URI_JSON_TEST = 'https://testewallet.com/eWalletWS/ws_JsonAdapter.aspx';

    /**  @var \Praxigento_Ips_Logger */
    protected $_log;
    /* Connect to test version of the IPS API */
    protected $_isInTestMode = true;
    /* Log requests/response */
    protected $_isInLogPrintMode = true;
    protected $_merchantGuid;
    protected $_merchantPassword;

    function __construct()
    {
        $this->_log = Praxigento_Ips_Logger::getLogger(__CLASS__);
        /* inversion !!! */
        $this->_isInTestMode = !Praxigento_Ips_Config::cfgStoreIpsProductionEnabled();
        $this->_isInLogPrintMode = Praxigento_Ips_Config::cfgStoreIpsLogsEnabled();
        $this->_merchantGuid = Praxigento_Ips_Config::cfgStoreIpsMerchantGuid();
        $this->_merchantPassword = Praxigento_Ips_Config::cfgStoreIpsMerchantPassword();
    }

    /**
     * Send $json to service and get response. Log request/response if $this->_isInLogPrintMode == true.
     *
     * @param $req Praxigento_Ips_Model_Own_Base_Request
     * @return string JSON response
     */
    protected function _call(Praxigento_Ips_Model_Own_Base_Request $req)
    {
        if ($this->_isInLogPrintMode) {
            $this->_log->trace($req->jsonEncode());
        }
        /* add authentication parameters */
        $req->MerchantGUID = $this->_merchantGuid;
        $req->MerchantPassword = $this->_merchantPassword;
        $json = $req->jsonEncode();
        /* make a POST request to eWallet HTTP adapter */
        $ch = curl_init($this->_getUriJsonAdapter());
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
        $result = curl_exec($ch);
        curl_close($ch);
        if ($this->_isInLogPrintMode) {
            $this->_log->trace($result);
        }
        return $result;
    }

    /**
     * Return URI to connect to HTTP/JSON adapter in test or production mode.
     * @return string
     */
    protected function  _getUriJsonAdapter()
    {
        if ($this->_isInTestMode) {
            $result = self::URI_JSON_TEST;
        } else {
            $result = self::URI_JSON_PROD;
        }
        return $result;
    }

    /**
     * @param boolean $var
     */
    public function setIsInLogPrintMode($var)
    {
        $this->_isInLogPrintMode = $var;
    }

    /**
     * @param boolean $var
     */
    public function setIsInTestMode($var)
    {
        $this->_isInTestMode = $var;
    }

    /**
     * @param Praxigento_Ips_Logger $var
     */
    public function setLog($var)
    {
        $this->_log = $var;
    }

    /**
     * @param mixed $var
     */
    public function setMerchantGuid($var)
    {
        $this->_merchantGuid = $var;
    }

    /**
     * @param mixed $var
     */
    public function setMerchantPassword($var)
    {
        $this->_merchantPassword = $var;
    }
}
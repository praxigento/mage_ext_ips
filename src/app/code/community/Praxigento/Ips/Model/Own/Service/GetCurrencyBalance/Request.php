<?php
/**
 * Copyright (c) 2015, Praxigento
 * All rights reserved.
 */

/**
 * Request for 'eWallet_GetCurrencyBalance' operation.
 *
 * User: Alex Gusev <alex@flancer64.com>
 */
class Praxigento_Ips_Model_Own_Service_GetCurrencyBalance_Request
    extends Praxigento_Ips_Model_Own_Base_Request
{
    public $fn = 'eWallet_GetCurrencyBalance';
    /**
     * Unique user name. It can be in any format.
     *
     * @var string
     */
    public $UserName;
    /**
     * 3 character currency code.
     *
     * @var string
     */
    public $CurrencyCode;

    /**
     * @param string $CurrencyCode
     */
    public function setCurrencyCode($CurrencyCode)
    {
        $this->CurrencyCode = $CurrencyCode;
    }

    /**
     * @param string $UserName
     */
    public function setUserName($UserName)
    {
        $this->UserName = $UserName;
    }
}
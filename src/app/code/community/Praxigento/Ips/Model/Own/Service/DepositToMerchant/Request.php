<?php
/**
 * Copyright (c) 2015, Praxigento
 * All rights reserved.
 */

/**
 * Request for 'eWallet_DepositToMerchant' operation.
 *
 * User: Alex Gusev <alex@flancer64.com>
 */
class Praxigento_Ips_Model_Own_Service_DepositToMerchant_Request
    extends Praxigento_Ips_Model_Own_Base_Request
{
    public $fn = 'eWallet_DepositToMerchant';
    /**
     * @var decimal
     */
    public $Amount;
    /**
     * @var string
     */
    public $CurrencyCode;
    /**
     * @var string
     */
    public $MerchantReferenceID;
    /**
     * @var  string
     */
    public $Reason;
    /**
     * @var string
     */
    public $UserName;

    /**
     * @param string $UserName
     */
    public function setUserName($UserName)
    {
        $this->UserName = $UserName;
    }

    /**
     * @param decimal $Amount
     */
    public function setAmount($Amount)
    {
        $this->Amount = $Amount;
    }

    /**
     * @param string $CurrencyCode
     */
    public function setCurrencyCode($CurrencyCode)
    {
        $this->CurrencyCode = $CurrencyCode;
    }

    /**
     * @param string $MerchantReferenceID
     */
    public function setMerchantReferenceID($MerchantReferenceID)
    {
        $this->MerchantReferenceID = $MerchantReferenceID;
    }

    /**
     * @param string $Reason
     */
    public function setReason($Reason)
    {
        $this->Reason = $Reason;
    }
}
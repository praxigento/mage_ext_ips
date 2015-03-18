<?php
/**
 * Copyright (c) 2015, Praxigento
 * All rights reserved.
 */

/**
 * User: Alex Gusev <alex@flancer64.com>
 */
class Praxigento_Ips_Model_Own_Bean_EWalletLoad extends Praxigento_Ips_Model_Own_Base_Bean
{
    /**
     * eWallet user name of the customer
     *
     * @var string
     */
    public $UserName;
    /**
     * Commission payout amount.
     *
     * @var decimal
     */
    public $Amount;
    /**
     * Short description for the commission payout (user will see it in
     * a history page).
     *
     * @var string
     */
    public $Comments;
    /**
     * Reference id from merchant’s platform. MerchantReferenceID
     * can be used in eWallet_FindTransaction method.
     *
     * @var string
     */
    public $MerchantReferenceID;

    /**
     * @return string
     */
    public function getUserName()
    {
        return $this->UserName;
    }

    /**
     * @param string $val
     */
    public function setUserName($val)
    {
        $this->UserName = $val;
    }

    /**
     * @return decimal
     */
    public function getAmount()
    {
        return $this->Amount;
    }

    /**
     * @param decimal $val
     */
    public function setAmount($val)
    {
        $this->Amount = $val;
    }

    /**
     * @return string
     */
    public function getComments()
    {
        return $this->Comments;
    }

    /**
     * @param string $val
     */
    public function setComments($val)
    {
        $this->Comments = $val;
    }

    /**
     * @return string
     */
    public function getMerchantReferenceID()
    {
        return $this->MerchantReferenceID;
    }

    /**
     * @param string $val
     */
    public function setMerchantReferenceID($val)
    {
        $this->MerchantReferenceID = $val;
    }
}
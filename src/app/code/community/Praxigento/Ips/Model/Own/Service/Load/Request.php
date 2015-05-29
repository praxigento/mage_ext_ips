<?php
/**
 * Copyright (c) 2015, Praxigento
 * All rights reserved.
 */

/**
 * Request for 'eWallet_Load' operation.
 *
 * User: Alex Gusev <alex@flancer64.com>
 */
class Praxigento_Ips_Model_Own_Service_Load_Request
    extends Praxigento_Ips_Model_Own_Base_Request
{
    public $fn = 'eWallet_Load';
    /**
     * Allow multiple same user names in the same PartnerBatchID.
     *
     * @var bool
     */
    public $AllowDuplicates = false;
    /**
     * If set to TRUE - automatically approve and load
     * payout into eWallets. A batch will be automatically
     * closed, and no other loads can be added into this
     * batch. If null - Praxigento_Ips_Config::cfgStoreIpsAllowAutoloads() is used.
     *
     * @var bool
     */
    public $AutoLoad = null;
    /**
     * Currency code of the transaction.
     *
     * @var string
     */
    public $CurrencyCode;
    /**
     * It is a parameter that is used to group all loads into
     * one batch. You may call Wallet_Load multiple times,
     * and as long as the PartnerBatchID is the same. Please
     * note that PartnerBatchID is used as a batch name in
     * the management console. The best practice is to use
     * a value that is easy readable like, “payout for
     * commissions on 3/12/2012”.
     *
     * @var string
     */
    public $PartnerBatchID;
    /**
     * Payout pool/level/tier. If you do not use pools, just
     * leave it blank. This field is just a reference.
     *
     * @var string
     */
    public $PoolID;
    /**
     * Array of eWallet accounts to load. See appendix E.
     *
     * @var Praxigento_Ips_Model_Own_Bean_EWalletLoad[]
     */
    public $arrAccounts = array();


    /**
     * @param Praxigento_Ips_Model_Own_Bean_EWalletLoad[] $val
     */
    public function setArrAccounts($val)
    {
        $this->arrAccounts = $val;
    }


    /**
     * @param boolean $val
     */
    public function setAllowDuplicates($val)
    {
        $this->AllowDuplicates = $val;
    }


    /**
     * @param boolean $val
     */
    public function setAutoLoad($val)
    {
        $this->AutoLoad = $val;
    }

    /**
     * @param string $val
     */
    public function setCurrencyCode($val)
    {
        $this->CurrencyCode = $val;
    }


    /**
     * @param string $val
     */
    public function setPartnerBatchID($val)
    {
        $this->PartnerBatchID = $val;
    }

    /**
     * @param string $val
     */
    public function setPoolID($val)
    {
        $this->PoolID = $val;
    }

    /**
     * Add account entry to the internal array.
     *
     * @param Praxigento_Ips_Model_Own_Bean_EWalletLoad $entry
     */
    public function addAccountsEntry(Praxigento_Ips_Model_Own_Bean_EWalletLoad $entry)
    {
        $this->arrAccounts[] = $entry;
    }
}
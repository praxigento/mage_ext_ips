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
class Praxigento_Ips_Model_Own_Service_GetCurrencyBalance_Response
    extends Praxigento_Ips_Model_Own_Base_Response
{
    private $Balance;

    /**
     * @return mixed
     */
    public function getBalance()
    {
        return $this->Balance;
    }

    protected function stdDecode(stdClass $std)
    {
        if (isset ($std->Balance)) $this->Balance = $std->Balance;
    }
}
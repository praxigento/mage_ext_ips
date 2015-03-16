<?php
/**
 * Copyright (c) 2015, Praxigento
 * All rights reserved.
 */

/**
 * IPS connector service (https://www.testewallet.com/eWalletWS/ws_eWallet.asmx).
 *
 * User: Alex Gusev <alex@flancer64.com>
 */
class Praxigento_Ips_Model_Own_Service_Call extends Praxigento_Ips_Model_Own_Base_Call
{
    /**
     * @param Praxigento_Ips_Model_Own_Service_GetCurrenceyBalance_Request $req
     * @return Praxigento_Ips_Model_Own_Service_GetCurrenceyBalance_Response
     */
    public function getCurrenceyBalance(Praxigento_Ips_Model_Own_Service_GetCurrenceyBalance_Request $req)
    {
        $result = Mage::getModel('prxgt_ips_model/own_service_getCurrenceyBalance_response');
        return $result;
    }

    /**
     * @param Praxigento_Ips_Model_Own_Service_RegisterUser_Request $req
     * @return Praxigento_Ips_Model_Own_Service_RegisterUser_Response
     */
    public function registerUser(Praxigento_Ips_Model_Own_Service_RegisterUser_Request $req)
    {
        $result = Mage::getModel('prxgt_ips_model/own_service_registerUser_response');
        /**/
        $resp = $this->_call($req);
        /**/
        return $result;
    }


}
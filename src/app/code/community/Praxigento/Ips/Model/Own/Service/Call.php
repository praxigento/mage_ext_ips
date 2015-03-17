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
     * @param Praxigento_Ips_Model_Own_Service_GetCurrencyBalance_Request $req
     * @return Praxigento_Ips_Model_Own_Service_GetCurrencyBalance_Response
     */
    public function getCurrencyBalance(Praxigento_Ips_Model_Own_Service_GetCurrencyBalance_Request $req)
    {
        $result = Mage::getModel('prxgt_ips_model/own_service_getCurrencyBalance_response');
        $json = $this->_call($req);
        $result->jsonDecode($json);
        return $result;
    }

    /**
     * @param Praxigento_Ips_Model_Own_Service_RegisterUser_Request $req
     * @return Praxigento_Ips_Model_Own_Service_RegisterUser_Response
     */
    public function registerUser(Praxigento_Ips_Model_Own_Service_RegisterUser_Request $req)
    {
        $result = Mage::getModel('prxgt_ips_model/own_service_registerUser_response');
        $json = $this->_call($req);
        $result->jsonDecode($json);
        return $result;
    }


}
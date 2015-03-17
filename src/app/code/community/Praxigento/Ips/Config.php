<?php
/**
 * Copyright (c) 2015, Praxigento
 * All rights reserved.
 */

/**
 * User: Alex Gusev <alex@flancer64.com>
 */
class Praxigento_Ips_Config
{
    public static function cfgStoreIpsMerchantGuid($store = null)
    {
        $result = (string)Mage::getStoreConfig('prxgt_store_setup/ips/merchant_guid', $store);
        $result = 'cca15e27-49a2-4191-9b5b-cc9fa3d41f5f';
        return $result;
    }

    public static function cfgStoreIpsMerchantPassword($store = null)
    {
        $result = (string)Mage::getStoreConfig('prxgt_store_setup/ips/merchant_pass', $store);
        $result = 'zNu2PEwvyP';
        return $result;
    }
}
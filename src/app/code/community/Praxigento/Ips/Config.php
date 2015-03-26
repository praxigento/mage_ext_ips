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
    public static function cfgStoreIpsLogsEnabled($store = null)
    {
        $result = Mage::getStoreConfig('prxgt_store_setup/ips/log_enabled_yesno', $store);
        $result = filter_var($result, FILTER_VALIDATE_BOOLEAN);
        return $result;
    }

    public static function cfgStoreIpsMerchantGuid($store = null)
    {
        $result = (string)Mage::getStoreConfig('prxgt_store_setup/ips/merchant_guid', $store);
        return $result;
    }

    public static function cfgStoreIpsMerchantPassword($store = null)
    {
        $result = (string)Mage::getStoreConfig('prxgt_store_setup/ips/merchant_pass', $store);
        return $result;
    }

    public static function cfgStoreIpsProductionEnabled($store = null)
    {
        $result = Mage::getStoreConfig('prxgt_store_setup/ips/production_yesno', $store);
        $result = filter_var($result, FILTER_VALIDATE_BOOLEAN);
        return $result;
    }

    public static function cfgStoreIpsAllowAutoloads($store = null)
    {
        $result = Mage::getStoreConfig('prxgt_store_setup/ips/allow_autoloads_yesno', $store);
        $result = filter_var($result, FILTER_VALIDATE_BOOLEAN);
        return $result;
    }
}
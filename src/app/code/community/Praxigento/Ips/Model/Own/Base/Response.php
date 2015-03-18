<?php
/**
 * Copyright (c) 2015, Praxigento
 * All rights reserved.
 */

/**
 * Base class for all services calls responses.
 * All response classes has getters only, setters are useless for responses.
 *
 * User: Alex Gusev <alex@flancer64.com>
 */
abstract class Praxigento_Ips_Model_Own_Base_Response
{
    /* See appendix A in https://www.i-payout.com/api/LoadFile.ashx?f=I-Payout%20eWallet%20webService%20v%204.9.pdf */
    const CODE_INTERNAL_ERROR = -1;
    const CODE_NO_ERROR = 0;
    const CODE_USERNAME_EXISTS = -12;

    /*
     * Common attributes for all responses.
     */
    private $m_Code;
    private $m_Text;
    private $TransactionRefID;
    private $LogTransactionID;
    private $ACHTransactionID;
    private $ProcessorTransactionRefNumber;
    private $CustomerFeeAmount;
    private $CurrencyCode;

    /**
     * @return mixed
     */
    public function getCommonACHTransactionID()
    {
        return $this->ACHTransactionID;
    }

    /**
     * @return mixed
     */
    public function getCommonCurrencyCode()
    {
        return $this->CurrencyCode;
    }

    /**
     * @return mixed
     */
    public function getCommonCustomerFeeAmount()
    {
        return $this->CustomerFeeAmount;
    }

    /**
     * @return mixed
     */
    public function getCommonLogTransactionID()
    {
        return $this->LogTransactionID;
    }

    /**
     * @return mixed
     */
    public function getCommonMessageCode()
    {
        return $this->m_Code;
    }

    /**
     * @return mixed
     */
    public function getCommonMessageText()
    {
        return $this->m_Text;
    }

    /**
     * @return mixed
     */
    public function getCommonProcessorTransactionRefNumber()
    {
        return $this->ProcessorTransactionRefNumber;
    }

    /**
     * @return mixed
     */
    public function getCommonTransactionRefID()
    {
        return $this->TransactionRefID;
    }

    /**
     * Return 'true' if response is processed successfully.
     * @return bool
     */
    public function isSucceed()
    {
        $result = ($this->m_Code == self::CODE_NO_ERROR);
        return $result;
    }

    /**
     * Decode JSON string and setup response attributes.
     *
     * @param $json
     * @return string
     */
    public function jsonDecode($json)
    {
        $std = json_decode($json);
        $this->stdDecode($std);
    }

    /**
     * Parse decoded JSON and init response specific attributes.
     *
     * @param stdClass $std
     * @return mixed
     */
    protected function stdDecode(stdClass $std)
    {
        if (isset($std->response)) {
            /* decode common attributes */
            $resp = $std->response;
            if (isset ($resp->m_Code)) $this->m_Code = $resp->m_Code;
            if (isset ($resp->m_Text)) $this->m_Text = $resp->m_Text;
            if (isset ($resp->LogTransactionID)) $this->LogTransactionID = $resp->LogTransactionID;
            if (isset ($resp->TransactionRefID)) $this->TransactionRefID = $resp->TransactionRefID;
            if (isset ($resp->ACHTransactionID)) $this->ACHTransactionID = $resp->ACHTransactionID;
            if (isset ($resp->ProcessorTransactionRefNumber)) $this->ProcessorTransactionRefNumber = $resp->ProcessorTransactionRefNumber;
            if (isset ($resp->CustomerFeeAmount)) $this->CustomerFeeAmount = $resp->CustomerFeeAmount;
            if (isset ($resp->CurrencyCode)) $this->CurrencyCode = $resp->CurrencyCode;
        }
    }
}
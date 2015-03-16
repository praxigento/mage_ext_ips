<?php
/**
 * Copyright (c) 2015, Praxigento
 * All rights reserved.
 */

/**
 * Base class for all services calls responses.
 *
 * User: Alex Gusev <alex@flancer64.com>
 */
abstract class Praxigento_Ips_Model_Own_Base_Response
{
    const FAILED = 'failed';
    const SUCCESS = 'success';
    /**
     * Array of error messages.
     *
     * @var array
     */
    private $_errorMsg = array();
    /**
     * Result code (error code or success code).
     * @var
     */
    private $_resultCode = self::FAILED;

    /**
     * Array of error messages.
     *
     * @return array
     */
    public function getErrorMsg()
    {
        return $this->_errorMsg;
    }

    /**
     * @param array $errorMsg
     */
    public function setErrorMsg($errorMsg)
    {
        if (is_array($errorMsg)) {
            $this->_errorMsg = $errorMsg;
        } else {
            $this->_errorMsg = array($errorMsg);
        }
    }

    /**
     * @return mixed
     */
    public function getResultCode()
    {
        return $this->_resultCode;
    }

    /**
     * @param mixed $val
     */
    public function setResultCode($val)
    {
        $this->_resultCode = $val;
    }

    public function isSucceed()
    {
        $result = ($this->_resultCode == self::SUCCESS);
        return $result;
    }

    public function setSucceed()
    {
        $this->_resultCode = self::SUCCESS;
    }
}
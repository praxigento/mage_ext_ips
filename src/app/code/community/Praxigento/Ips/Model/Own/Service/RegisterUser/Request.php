<?php
/**
 * Copyright (c) 2015, Praxigento
 * All rights reserved.
 */

/**
 * Request for 'eWallet_RegisterUser' operation.
 *
 * User: Alex Gusev <alex@flancer64.com>
 */
class Praxigento_Ips_Model_Own_Service_RegisterUser_Request
    extends Praxigento_Ips_Model_Own_Base_Request
{
    public $fn = 'eWallet_RegisterUser';
    /**
     * Unique user name. It can be in any format.
     *
     * @var string
     */
    public $UserName;
    /**
     * User’s last name.
     *
     * @var string
     */
    public $LastName;
    /**
     * User’s first name.
     *
     * @var string
     */
    public $FirstName;
    /**
     * Upon registration and after any financial activity, user will receive an email into this address.
     *
     * @var string
     */
    public $EmailAddress;
    /**
     * User’s date of birth. Should be 18 or older. If date of birth is not known, please set it to: 1/1/1900.
     * It will be asked on a first user login.
     *
     * @var string
     */
    public $DateOfBirth;

    function __construct()
    {
        $this->DateOfBirth = $this->_formatDate(DateTime::createFromFormat('Y/m/d', '1973/01/01'));
    }

    /**
     * @param string $val
     */
    public function setDateOfBirth($val)
    {
        $this->DateOfBirth = $val;
    }

    /**
     * @param string $val
     */
    public function setEmailAddress($val)
    {
        $this->EmailAddress = $val;
    }

    /**
     * @param string $val
     */
    public function setFirstName($val)
    {
        $this->FirstName = $val;
    }

    /**
     * @param string $val
     */
    public function setLastName($val)
    {
        $this->LastName = $val;
    }

    /**
     * @param string $val
     */
    public function setUserName($val)
    {
        $this->UserName = $val;
    }

}
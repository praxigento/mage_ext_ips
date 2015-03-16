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
    public $UserName;
    public $LastName;
    public $FirstName;
    public $EmailAddress;
    public $DateOfBirth;

    function __construct()
    {
        $this->DateOfBirth = $this->_formatDate(DateTime::createFromFormat('Y/m/d', '1973/01/01'));
    }

}
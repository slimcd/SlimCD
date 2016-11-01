<?php

namespace SlimCD\Reports;

class Reports_SearchTransactionsRequest
{
    // property declaration
    public $username = '';
    public $password = '';
    public $recordcountonly = false;
    public $maxrecords  = 0;
    public $startdate = '';
    public $enddate  = '';
    public $clientid  = 0;
    public $firstname = '';
    public $lastname = '';
    public $city = '';
    public $state = '';
    public $zip = 0;
    public $email = '';
    public $amount = '';
    public $clienttransref = '';
    public $transtype = '';
    public $cardnumber = 0;
    public $cardid = '';
    public $cardpart = '';
    public $clerkname = '';
    public $gateid = 0;
    public $reverseorder = '';

    public function jsonSerialize() {
        return (get_object_vars($this));
    }
}
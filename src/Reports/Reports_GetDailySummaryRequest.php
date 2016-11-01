<?php

namespace SlimCD\Reports;

use \SlimCD\jsonSerializeTrait;

class Reports_GetDailySummaryRequest
{
    // property declaration
    public $username = '';
    public $password = '';
    public $metabankid = 0;
    public $bankid = 0;
    public $clientid = 0;
    public $siteid = 0;
    public $startdate = '';
    public $enddate = '';

    use jsonSerializeTrait;
}
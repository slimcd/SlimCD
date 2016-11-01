<?php

namespace SlimCD\Reports;

use \SlimCD\jsonSerializeTrait;

class Reports_GetTransactionDetailsRequest
{
    // property declaration
    public $username = '';
    public $password = '';
    public $siteid = 0;

    use jsonSerializeTrait;
}
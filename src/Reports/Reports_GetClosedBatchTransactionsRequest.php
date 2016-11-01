<?php

namespace SlimCD\Reports;

use \SlimCD\jsonSerializeTrait;

class Reports_GetClosedBatchTransactionsRequest
{
    // property declaration
    public $username = '';
    public $password = '';
    public $siteid = 0;
    public $batchid = 0;

    use jsonSerializeTrait;
}
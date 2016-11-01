<?php

namespace SlimCD\Reports;

use \SlimCD\jsonSerializeTrait;

class Reports_GetBatchSummaryRequest
{
    // property declaration
    public $username = '';
    public $password = '';
    public $siteid = 0;
    public $startdate = '';
    public $enddate = '';

    use jsonSerializeTrait;
}
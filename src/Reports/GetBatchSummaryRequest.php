<?php

namespace SlimCD\Reports;

use \SlimCD\jsonSerializeTrait;

class GetBatchSummaryRequest
{
    // property declaration
    public $username = '';
    public $password = '';
    public $siteid = 0;
    public $startdate = '';
    public $enddate = '';

    use jsonSerializeTrait;
}
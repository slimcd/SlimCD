<?php

namespace SlimCD\Reports;

use \SlimCD\jsonSerializeTrait;

class GetBatchHistoryRequest
{
    // property declaration
    public $username = '';
    public $password = '';
    public $siteid = 0;
    public $startdate = '';
    public $enddate = '';

    use jsonSerializeTrait;
}
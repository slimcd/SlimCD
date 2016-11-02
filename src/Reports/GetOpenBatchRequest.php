<?php

namespace SlimCD\Reports;

use \SlimCD\jsonSerializeTrait;

class GetOpenBatchRequest
{
    // property declaration
    public $username = '';
    public $password = '';
    public $siteid = 0;

    use jsonSerializeTrait;
}
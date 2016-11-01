<?php

namespace SlimCD\Reports;

use \SlimCD\jsonSerializeTrait;

class Reports_GetOpenAuthsRequest
{
    // property declaration
    public $username = '';
    public $password = '';
    public $siteid = 0;
    public $StartDate ='';
    public $EndDate ='';

    use jsonSerializeTrait;
}
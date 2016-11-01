<?php

namespace SlimCD\Reports;

class Reports_GetOpenAuthsRequest
{
    // property declaration
    public $username = '';
    public $password = '';
    public $siteid = 0;
    public $StartDate ='';
    public $EndDate ='';

    public function jsonSerialize() {
        return (get_object_vars($this));
    }
}
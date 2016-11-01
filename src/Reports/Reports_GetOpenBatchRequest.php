<?php

namespace SlimCD\Reports;

class Reports_GetOpenBatchRequest
{
    // property declaration
    public $username = '';
    public $password = '';
    public $siteid = 0;

    public function jsonSerialize() {
        return (get_object_vars($this));
    }
}
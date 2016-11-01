<?php

namespace SlimCD\Reports;

class Reports_GetBatchHistoryRequest
{
    // property declaration
    public $username = '';
    public $password = '';
    public $siteid=0;
    public $startdate="";
    public $enddate="";

    public function jsonSerialize() {
        return (get_object_vars($this));
    }
}
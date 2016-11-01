<?php

namespace SlimCD\Transact;

class Transact_CloseBatchRequest
{
    // property declaration
    public $username = '';
    public $password = '';
    public $siteid = 0;
    public $batchnumber = '';

    public function jsonSerialize() {
        return (get_object_vars($this));
    }
}
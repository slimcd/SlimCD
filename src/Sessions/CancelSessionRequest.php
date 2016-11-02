<?php

namespace SlimCD\Sessions;

use \SlimCD\jsonSerializeTrait;

class CancelSessionRequest
{
    // property declaration
    public $username  = '';
    public $password  = '';
    public $sessionid = '';

    use jsonSerializeTrait;
}
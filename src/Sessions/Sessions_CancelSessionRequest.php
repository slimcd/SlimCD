<?php

namespace SlimCD\Sessions;

use \SlimCD\jsonSerializeTrait;

class Sessions_CancelSessionRequest
{
    // property declaration
    public $username  = '';
    public $password  = '';
    public $sessionid = '';

    use jsonSerializeTrait;
}
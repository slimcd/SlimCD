<?php

namespace SlimCD\Sessions;

use \SlimCD\jsonSerializeTrait;

class Sessions_SpawnSessionsRequest
{
    // property declaration
    public $amount = '';
    public $sessionid = '';

    use jsonSerializeTrait;
}
<?php

namespace SlimCD\Sessions;

use \SlimCD\jsonSerializeTrait;

class SpawnSessionsRequest
{
    // property declaration
    public $amount = '';
    public $sessionid = '';

    use jsonSerializeTrait;
}
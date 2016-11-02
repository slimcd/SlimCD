<?php

namespace SlimCD\Login;

use \SlimCD\jsonSerializeTrait;

class GetUserClientsRequest
{
    // property declaration
    public $username = '';
    public $password = '';

    use jsonSerializeTrait;
}
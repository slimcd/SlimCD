<?php

namespace SlimCD\Login;

use \SlimCD\jsonSerializeTrait;

class Login_GetUserClientsRequest
{
    // property declaration
    public $username = '';
    public $password = '';

    use jsonSerializeTrait;
}
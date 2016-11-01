<?php

namespace SlimCD\Login;

use \SlimCD\jsonSerializeTrait;

class Login_GetUserSettingsRequest
{
    // property declaration
    public $username = '';
    public $password = '';

    use jsonSerializeTrait;
}
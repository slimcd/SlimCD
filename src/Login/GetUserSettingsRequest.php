<?php

namespace SlimCD\Login;

use \SlimCD\jsonSerializeTrait;

class GetUserSettingsRequest
{
    // property declaration
    public $username = '';
    public $password = '';

    use jsonSerializeTrait;
}
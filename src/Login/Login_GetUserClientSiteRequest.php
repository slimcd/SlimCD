<?php

namespace SlimCD\Login;

use \SlimCD\jsonSerializeTrait;

class Login_GetUserClientSiteRequest
{
    // property declaration
    public $username = '';
    public $password = '';
    public $clientid = 0;
    public $siteid = 0;

    use jsonSerializeTrait;
}
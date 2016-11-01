<?php

namespace SlimCD\Login;

class Login_GetUserClientSiteRequest
{
    // property declaration
    public $username = '';
    public $password = '';
    public $clientid = 0;
    public $siteid = 0;

    public function jsonSerialize() {
        return (get_object_vars($this));
    }
}
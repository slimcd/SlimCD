<?php

namespace SlimCD\Login;

class Login_GetUserSettingsRequest
{
    // property declaration
    public $username = '';
    public $password = '';

    public function jsonSerialize() {
        return (get_object_vars($this));
    }
}
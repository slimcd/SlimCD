<?php

namespace SlimCD\Sessions;

class Sessions_DestroySessionsRequest
{
    // property declaration
    public $username = '';
    public $password = '';
    public $sessionid = '';

    public function jsonSerialize() {
        return (get_object_vars($this));
    }
}
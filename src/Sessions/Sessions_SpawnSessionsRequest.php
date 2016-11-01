<?php

namespace SlimCD\Sessions;

class Sessions_SpawnSessionsRequest
{
    // property declaration
    public $amount = '';
    public $sessionid = '';

    public function jsonSerialize() {
        return (get_object_vars($this));
    }
}
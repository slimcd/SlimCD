<?php

namespace SlimCD\Sessions;

class Sessions_SendSessionRequest
{
    // property declaration
    public $username = '';
    public $password = '';
    public $sessionid = 0;
    public $message = '';
    public $send_email = '';
    public $email = '';
    public $email_from = '';
    public $send_html = '';
    public $send_sms = '';
    public $phone = 0;

    public function jsonSerialize() {
        return (get_object_vars($this));
    }
}
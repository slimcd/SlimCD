<?php

namespace SlimCD\Images;

class SendReceiptRequest
{
    // property declaration
    public $username = '';
    public $password = '';
    public $gateid = 0;
    public $send_sms = 'no';
    public $phone = '';
    public $send_email = 'no';
    public $email = '';
    public $send_cc = 'no';
    public $ccemail = '';

    public function jsonSerialize() {
        return array(
            'username' => $this->username,
            'password' => $this->password,
            'gateid' => $this->gateid,
            'send_sms' => (($this->send_sms === true || $this->send_sms == 'yes' || $this->send_sms == '1') ? 1 : 0),
            'phone' => $this->phone,
            'send_email' => (($this->send_email === true || $this->send_email == 'yes' || $this->send_email == '1') ? 1 : 0),
            'email' => $this->email,
            'ccemail' => $this->ccemail
        );
    }
}
<?php

namespace SlimCD\Images;

class Images_UploadSignatureRequest
{
    // property declaration
    public $username = '';
    public $password = '';
    public $siteid = 0;
    public $gateid = 0;
    public $filetype = '';
    public $imagedata = '';

    public function jsonSerialize() {
        return (get_object_vars($this));
    }
}
<?php

namespace SlimCD\Images;

use \SlimCD\jsonSerializeTrait;

class Images_UploadReceiptRequest
{
    // property declaration
    public $username = '';
    public $password = '';
    public $siteid = 0;
    public $gateid = 0;
    public $filetype = '';
    public $imagedata = '';

    use jsonSerializeTrait;
}
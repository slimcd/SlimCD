<?php

namespace SlimCD\Images;

use \SlimCD\jsonSerializeTrait;

/**
 * Class DownloadCheckRequest
 * @package SlimCD\Images
 */
class DownloadCheckRequest
{
    // property declaration
    public $username = '';
    public $password = '';
    public $gateid   = 0;

    use jsonSerializeTrait;
}

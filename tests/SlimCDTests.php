<?php

use SlimCD\Images\Images;
use SlimCD\Images\DownloadCheckRequest;

class SlimCDTests extends PHPUnit_Framework_Testcase {

    /**
     * @covers \SlimCD\SlimCD::standardErrorBlock
     * @covers \SlimCD\SlimCD::httpPost
     */
    public function testInstantiate()
    {
        $Images = new Images();
        $this->assertInstanceOf('SlimCD\Images\Images', $Images);
    }

    public function testTrait()
    {
        $Images_DownloadCheckRequest = new DownloadCheckRequest();
        $this->assertInternalType('array', $Images_DownloadCheckRequest->jsonSerialize());
    }
}

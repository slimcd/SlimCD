<?php
use SlimCD\Images\Images;
use SlimCD\Images\DownloadCheckRequest;

class SlimCDTests extends PHPUnit_Framework_Testcase {

    public function testInstantiate()
    {
        $SlimCD = new Images();
        $this->assertInstanceOf('SlimCD\Images\Images', $SlimCD);
    }

    public function testTrait()
    {
        $Images_DownloadCheckRequest = new DownloadCheckRequest();
        $this->assertInternalType('array', $Images_DownloadCheckRequest->jsonSerialize());
    }
}

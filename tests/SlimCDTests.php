<?php
use SlimCD\SlimCD;
use SlimCD\Images\Images_DownloadCheckRequest;

class SlimCDTests extends PHPUnit_Framework_Testcase {

    public function testInstantiate()
    {
        $SlimCD = new SlimCD();
        $this->assertInstanceOf('SlimCD\SlimCD', $SlimCD);
    }

    public function testTrait()
    {
        $Images_DownloadCheckRequest = new Images_DownloadCheckRequest();
        $this->assertInternalType('array', $Images_DownloadCheckRequest->jsonSerialize());
    }
}

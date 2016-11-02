<?php
use SlimCD\SlimCD;
use SlimCD\Images\DownloadCheckRequest;

class SlimCDTests extends PHPUnit_Framework_Testcase {

    public function testInstantiate()
    {
        $SlimCD = new SlimCD();
        $this->assertInstanceOf('SlimCD\SlimCD', $SlimCD);
    }

    public function testTrait()
    {
        $Images_DownloadCheckRequest = new DownloadCheckRequest();
        $this->assertInternalType('array', $Images_DownloadCheckRequest->jsonSerialize());
    }
}

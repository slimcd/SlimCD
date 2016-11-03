<?php

use SlimCD\Images\Images;
use SlimCD\Images\DownloadCheckRequest;

class SlimCDTests extends PHPUnit_Framework_Testcase {

    /**
     * @covers \SlimCD\SlimCD::errorBlock
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

    /**
     * @expectedException Exception
     * @expectedExceptionMessage Curl Error
     */
    public function testProtectedMethods()
    {
        $httpPost = self::getMethod('httpPost');
        $obj = $this->getMockForAbstractClass('\SlimCD\SlimCD');
        $httpPost->invokeArgs($obj, array(
            "localhost",
            0,
            []
        ));
    }

    protected static function getMethod($name) {
        $class = new ReflectionClass('\SlimCD\SlimCD');
        $method = $class->getMethod($name);
        $method->setAccessible(true);
        return $method;
    }
}

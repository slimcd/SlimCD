<?php

use SlimCD\Images\Images;

class ImagesTest extends PHPUnit_Framework_TestCase
{
    public function testInstantiateImagesClass()
    {
        $testObject = new Images();
        $this->assertInstanceOf('SlimCD\Images\Images', $testObject);
    }

    public function testDownloadCheckRequest()
    {
        $testObject = new \SlimCD\Images\DownloadCheckRequest();
        $this->assertInstanceOf('\SlimCD\Images\DownloadCheckRequest', $testObject);
        $this->assertInternalType('array', $testObject->jsonSerialize());
    }

    public function testDownloadReceiptRequest()
    {
        $testObject = new \SlimCD\Images\DownloadReceiptRequest();
        $this->assertInstanceOf('\SlimCD\Images\DownloadReceiptRequest', $testObject);
        $this->assertInternalType('array', $testObject->jsonSerialize());
    }

    public function testDownloadSignatureRequest()
    {
        $testObject = new \SlimCD\Images\DownloadSignatureRequest();
        $this->assertInstanceOf('\SlimCD\Images\DownloadSignatureRequest', $testObject);
        $this->assertInternalType('array', $testObject->jsonSerialize());
    }

    public function testGetReceiptRequest()
    {
        $testObject = new \SlimCD\Images\GetReceiptRequest();
        $this->assertInstanceOf('\SlimCD\Images\GetReceiptRequest', $testObject);
        $this->assertInternalType('array', $testObject->jsonSerialize());
    }

    public function testGetSignatureImageRequest()
    {
        $testObject = new \SlimCD\Images\GetSignatureImageRequest();
        $this->assertInstanceOf('\SlimCD\Images\GetSignatureImageRequest', $testObject);
        $this->assertInternalType('array', $testObject->jsonSerialize());
    }

    public function testSendReceiptRequest()
    {
        $testObject = new \SlimCD\Images\SendReceiptRequest();
        $this->assertInstanceOf('\SlimCD\Images\SendReceiptRequest', $testObject);
        $this->assertInternalType('array', $testObject->jsonSerialize());
    }

    public function testUploadCheckRequest()
    {
        $testObject = new \SlimCD\Images\UploadCheckRequest();
        $this->assertInstanceOf('\SlimCD\Images\UploadCheckRequest', $testObject);
        $this->assertInternalType('array', $testObject->jsonSerialize());
    }

    public function testUploadReceiptRequest()
    {
        $testObject = new \SlimCD\Images\UploadReceiptRequest();
        $this->assertInstanceOf('\SlimCD\Images\UploadReceiptRequest', $testObject);
        $this->assertInternalType('array', $testObject->jsonSerialize());
    }

    public function testUploadSignatureRequest()
    {
        $testObject = new \SlimCD\Images\UploadSignatureRequest();
        $this->assertInstanceOf('\SlimCD\Images\UploadSignatureRequest', $testObject);
        $this->assertInternalType('array', $testObject->jsonSerialize());
    }
}

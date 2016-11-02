<?php

use SlimCD\Sessions\Sessions;

class SessionsTest extends PHPUnit_Framework_TestCase
{
    public function testInstantiateSessionsClass()
    {
        $testObject = new Sessions();
        $this->assertInstanceOf('SlimCD\Sessions\Sessions', $testObject);
    }

    public function testCancelSessionRequest()
    {
        $testObject = new \SlimCD\Sessions\CancelSessionRequest();
        $this->assertInstanceOf('\SlimCD\Sessions\CancelSessionRequest', $testObject);
        $this->assertInternalType('array', $testObject->jsonSerialize());
    }

    public function testCheckSessionRequest()
    {
        $testObject = new \SlimCD\Sessions\CheckSessionRequest();
        $this->assertInstanceOf('\SlimCD\Sessions\CheckSessionRequest', $testObject);
        $this->assertInternalType('array', $testObject->jsonSerialize());
    }

    public function testCreateSessionRequest()
    {
        $testObject = new \SlimCD\Sessions\CreateSessionRequest();
        $this->assertInstanceOf('\SlimCD\Sessions\CreateSessionRequest', $testObject);
        $this->assertInternalType('array', $testObject->jsonSerialize());
    }

    public function testDestroySessionsRequest()
    {
        $testObject = new \SlimCD\Sessions\DestroySessionsRequest();
        $this->assertInstanceOf('\SlimCD\Sessions\DestroySessionsRequest', $testObject);
        $this->assertInternalType('array', $testObject->jsonSerialize());
    }

    public function testGetSessionFieldsRequest()
    {
        $testObject = new \SlimCD\Sessions\GetSessionFieldsRequest();
        $this->assertInstanceOf('\SlimCD\Sessions\GetSessionFieldsRequest', $testObject);
        $this->assertInternalType('array', $testObject->jsonSerialize());
    }

    public function testMultiSessionRequest()
    {
        $testObject = new \SlimCD\Sessions\MultiSessionRequest();
        $this->assertInstanceOf('\SlimCD\Sessions\MultiSessionRequest', $testObject);
    }

    public function testSearchSessionsRequest()
    {
        $testObject = new \SlimCD\Sessions\SearchSessionsRequest();
        $this->assertInstanceOf('\SlimCD\Sessions\SearchSessionsRequest', $testObject);
        $this->assertInternalType('array', $testObject->jsonSerialize());
    }

    public function testSendSessionRequest()
    {
        $testObject = new \SlimCD\Sessions\SendSessionRequest();
        $this->assertInstanceOf('\SlimCD\Sessions\SendSessionRequest', $testObject);
        $this->assertInternalType('array', $testObject->jsonSerialize());
    }

    public function testShowSessionRequest()
    {
        $testObject = new \SlimCD\Sessions\ShowSessionRequest();
        $this->assertInstanceOf('\SlimCD\Sessions\ShowSessionRequest', $testObject);
    }

    public function testSpawnSessionsRequest()
    {
        $testObject = new \SlimCD\Sessions\SpawnSessionsRequest();
        $this->assertInstanceOf('\SlimCD\Sessions\SpawnSessionsRequest', $testObject);
        $this->assertInternalType('array', $testObject->jsonSerialize());
    }
}

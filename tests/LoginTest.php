<?php

use SlimCD\Login\Login;

class LoginTest extends PHPUnit_Framework_TestCase
{
    public function testInstantiateLoginClass()
    {
        $testObject = new Login();
        $this->assertInstanceOf('SlimCD\Login\Login', $testObject);
    }

    public function testGetUserClientSiteRequest()
    {
        $testObject = new \SlimCD\Login\GetUserClientSiteRequest();
        $this->assertInstanceOf('\SlimCD\Login\GetUserClientSiteRequest', $testObject);
        $this->assertInternalType('array', $testObject->jsonSerialize());
    }

    public function testGetUserClientsRequest()
    {
        $testObject = new \SlimCD\Login\GetUserClientsRequest();
        $this->assertInstanceOf('\SlimCD\Login\GetUserClientsRequest', $testObject);
        $this->assertInternalType('array', $testObject->jsonSerialize());
    }

    public function testGetUserSettingsRequest()
    {
        $testObject = new \SlimCD\Login\GetUserSettingsRequest();
        $this->assertInstanceOf('\SlimCD\Login\GetUserSettingsRequest', $testObject);
        $this->assertInternalType('array', $testObject->jsonSerialize());
    }
}

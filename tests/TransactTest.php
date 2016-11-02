<?php

use SlimCD\Transact\Transact;

class TransactTest extends PHPUnit_Framework_TestCase
{
    public function testInstantiateTransactClass()
    {
        $testObject = new Transact();
        $this->assertInstanceOf('SlimCD\Transact\Transact', $testObject);
    }

    public function testCloseBatchRequest()
    {
        $testObject = new \SlimCD\Transact\CloseBatchRequest();
        $this->assertInstanceOf('\SlimCD\Transact\CloseBatchRequest', $testObject);
        $this->assertInternalType('array', $testObject->jsonSerialize());
    }

    public function testProcessTransactionRequest()
    {
        $testObject = new \SlimCD\Transact\ProcessTransactionRequest();
        $this->assertInstanceOf('\SlimCD\Transact\ProcessTransactionRequest', $testObject);
        $this->assertInternalType('array', $testObject->jsonSerialize());
    }
}

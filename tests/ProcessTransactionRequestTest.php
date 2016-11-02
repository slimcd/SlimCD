<?php

use SlimCD\Transact\ProcessTransactionRequest;

class ProcessTransactionRequestTest extends PHPUnit_Framework_TestCase
{
    public function testProcessTransactionInstantiate()
    {
        $ProcessTransactionRequest = new ProcessTransactionRequest();
        $this->assertInstanceOf('SlimCD\Transact\ProcessTransactionRequest', $ProcessTransactionRequest);
    }

    public function testProcessTransactionJsonSerialize()
    {
        $ProcessTransactionRequest = new ProcessTransactionRequest();
        $this->assertInternalType('array', $ProcessTransactionRequest->jsonSerialize());
    }
}

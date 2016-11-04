<?php

use SlimCD\Transact\Transact;

class SlimCDTests extends PHPUnit_Framework_TestCase
{
    public function testingGuzzle()
    {
        $transact = new Transact();
        $ProcessTransactionRequest = new \SlimCD\Transact\ProcessTransactionRequest();
        $reply = $transact->processTransaction($ProcessTransactionRequest);
        $this->assertInternalType('string', $reply->response);
    }
}

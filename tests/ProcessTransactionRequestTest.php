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

    public function testProcessTransaction()
    {
        $amount = rand(1, 999);

        $request = new SlimCD\Transact\ProcessTransactionRequest();
        $request->username = '1032';
        $request->password = '289075';
        $request->clientid = '1032';
        $request->siteid = 228226448;
        $request->priceid = 74;
        $request->transtype = 'SALE';
        $request->amount = $amount . '.00';
        $request->cardnumber = '4111111111111111';
        $request->expmonth = '12';
        $request->expyear = '49';
        $request->product = 'SlimCD Package';
        $request->ver = '0.1.0';
        $request->key = 'SVD-072-5QQ6-5K58';

        $transact = new SlimCD\Transact\Transact();
        $reply = $transact->processTransaction($request);
        $this->assertEquals($reply->response, "Success");
    }
}

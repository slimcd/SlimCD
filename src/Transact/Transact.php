<?php

namespace SlimCD\Transact;

use SlimCD\SlimCD;

class Transact extends SlimCD implements \SlimCD\Interfaces\Transact
{
    public function processTransaction(ProcessTransactionRequest $request, $timeout = false)
    {
        $timeout = $this->getTimeout($timeout);
        return ($this->httpPost($this->transURL . "/soft/json/jsonpayment.asp", $timeout, $request->jsonSerialize()));
    }

    public function closeBatch(CloseBatchRequest $request, $timeout = false)
    {
        $timeout = $this->getTimeout($timeout);
        return ($this->httpPost($this->transURL . "/soft/json/jsonscript.asp?service=CloseBatch", $timeout, $request->jsonSerialize()));
    }
}
<?php

namespace SlimCD\Transact;

use SlimCD\SlimCD;

class Transact extends SlimCD
{
    public function Transact_ProcessTransaction(ProcessTransactionRequest $request, $timeout = false)
    {
        $timeout = $this->getTimeout($timeout);
        return ($this->HttpPost($this->transURL . "/soft/json/jsonpayment.asp", $timeout, $request->jsonSerialize()));
    }

    public function Transact_CloseBatch(CloseBatchRequest $request, $timeout = false)
    {
        $timeout = $this->getTimeout($timeout);
        return ($this->HttpPost($this->transURL . "/soft/json/jsonscript.asp?service=CloseBatch", $timeout, $request->jsonSerialize()));
    }
}
<?php

namespace SlimCD\Interfaces;

use \SlimCD\Transact\ProcessTransactionRequest;
use \SlimCD\Transact\CloseBatchRequest;

interface Transact {
    public function Transact_ProcessTransaction(ProcessTransactionRequest $request, $timeout = false);
    public function Transact_CloseBatch(CloseBatchRequest $request, $timeout = false);
}

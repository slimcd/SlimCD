<?php

namespace SlimCD\Reports;

use SlimCD\SlimCD;

class Reports extends SlimCD implements \SlimCD\Interfaces\Reports
{
    public function getOpenBatch(GetOpenBatchRequest $request, $timeout = false)
    {
        $timeout = $this->getTimeout($timeout);
        return ($this->httpPost($this->statsURL . "/soft/json/jsonscript.asp?service=GetOpenBatch2", $timeout, $request->jsonSerialize()));
    }

    public function searchTransactions(SearchTransactionsRequest $request, $timeout = false)
    {
        $timeout = $this->getTimeout($timeout);
        return ($this->httpPost($this->statsURL . "/soft/json/jsonscript.asp?service=SearchTransactions2", $timeout, $request->jsonSerialize()));
    }

    public function getDailySummary(GetDailySummaryRequest $request, $timeout = false)
    {
        $timeout = $this->getTimeout($timeout);
        return ($this->httpPost($this->statsURL . "/soft/json/jsonscript.asp?service=GetDailySummary", $timeout, $request->jsonSerialize()));
    }

    public function getBatchSummary(GetBatchSummaryRequest $request, $timeout = false)
    {
        $timeout = $this->getTimeout($timeout);
        return ($this->httpPost($this->statsURL . "/soft/json/jsonscript.asp?service=GetBatchSummary2", $timeout, $request->jsonSerialize()));
    }

    public function getClosedBatchTransactions(GetClosedBatchTransactionsRequest $request, $timeout = false)
    {
        $timeout = $this->getTimeout($timeout);
        return ($this->httpPost($this->statsURL . "/soft/json/jsonscript.asp?service=GetClosedBatchTransactions2", $timeout, $request->jsonSerialize()));
    }

    public function getOpenAuths(GetOpenAuthsRequest $request, $timeout = false)
    {
        $timeout = $this->getTimeout($timeout);
        return ($this->httpPost($this->statsURL . "/soft/json/jsonscript.asp?service=GetOpenAuths2", $timeout, $request->jsonSerialize()));
    }

    public function getTransactionDetails(GetTransactionDetailsRequest $request, $timeout = false)
    {
        $timeout = $this->getTimeout($timeout);
        return ($this->httpPost($this->statsURL . "/soft/json/jsonscript.asp?service=GetTransactionDetails2", $timeout, $request->jsonSerialize()));
    }

    public function getBatchHistory(GetBatchHistoryRequest $request, $timeout = false)
    {
        $timeout = $this->getTimeout($timeout);
        return ($this->httpPost($this->statsURL . "/soft/json/jsonscript.asp?service=GetBatchHistory2", $timeout, $request->jsonSerialize()));
    }
}
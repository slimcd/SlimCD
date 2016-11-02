<?php

namespace SlimCD\Reports;

use SlimCD\SlimCD;

class Reports extends SlimCD
{
    public function Reports_GetOpenBatch(GetOpenBatchRequest $request, $timeout = false)
    {
        $timeout = $this->getTimeout($timeout);
        return ($this->HttpPost($this->statsURL . "/soft/json/jsonscript.asp?service=GetOpenBatch2", $timeout, $request->jsonSerialize()));
    }

    public function Reports_SearchTransactions(SearchTransactionsRequest $request, $timeout = false)
    {
        $timeout = $this->getTimeout($timeout);
        return ($this->HttpPost($this->statsURL . "/soft/json/jsonscript.asp?service=SearchTransactions2", $timeout, $request->jsonSerialize()));
    }

    public function Reports_GetDailySummary(GetDailySummaryRequest $request, $timeout = false)
    {
        $timeout = $this->getTimeout($timeout);
        return ($this->HttpPost($this->statsURL . "/soft/json/jsonscript.asp?service=GetDailySummary", $timeout, $request->jsonSerialize()));
    }

    public function Reports_GetBatchSummary(GetBatchSummaryRequest $request, $timeout = false)
    {
        $timeout = $this->getTimeout($timeout);
        return ($this->HttpPost($this->statsURL . "/soft/json/jsonscript.asp?service=GetBatchSummary2", $timeout, $request->jsonSerialize()));
    }

    public function Reports_GetClosedBatchTransactions(GetClosedBatchTransactionsRequest $request, $timeout = false)
    {
        $timeout = $this->getTimeout($timeout);
        return ($this->HttpPost($this->statsURL . "/soft/json/jsonscript.asp?service=GetClosedBatchTransactions2", $timeout, $request->jsonSerialize()));
    }

    public function Reports_GetOpenAuths(GetOpenAuthsRequest $request, $timeout = false)
    {
        $timeout = $this->getTimeout($timeout);
        return ($this->HttpPost($this->statsURL . "/soft/json/jsonscript.asp?service=GetOpenAuths2", $timeout, $request->jsonSerialize()));
    }

    public function Reports_GetTransactionDetails(GetTransactionDetailsRequest $request, $timeout = false)
    {
        $timeout = $this->getTimeout($timeout);
        return ($this->HttpPost($this->statsURL . "/soft/json/jsonscript.asp?service=GetTransactionDetails2", $timeout, $request->jsonSerialize()));
    }

    public function Reports_GetBatchHistory(GetBatchHistoryRequest $request, $timeout = false)
    {
        $timeout = $this->getTimeout($timeout);
        return ($this->HttpPost($this->statsURL . "/soft/json/jsonscript.asp?service=GetBatchHistory2", $timeout, $request->jsonSerialize()));
    }
}
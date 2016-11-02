<?php

namespace SlimCD\Interfaces;

use \SlimCD\Reports\GetOpenBatchRequest;
use \SlimCD\Reports\SearchTransactionsRequest;
use \SlimCD\Reports\GetDailySummaryRequest;
use \SlimCD\Reports\GetBatchSummaryRequest;
use \SlimCD\Reports\GetClosedBatchTransactionsRequest;
use \SlimCD\Reports\GetOpenAuthsRequest;
use \SlimCD\Reports\GetTransactionDetailsRequest;
use \SlimCD\Reports\GetBatchHistoryRequest;

interface Reports {
    public function Reports_GetOpenBatch(GetOpenBatchRequest $request, $timeout = false);
    public function Reports_SearchTransactions(SearchTransactionsRequest $request, $timeout = false);
    public function Reports_GetDailySummary(GetDailySummaryRequest $request, $timeout = false);
    public function Reports_GetBatchSummary(GetBatchSummaryRequest $request, $timeout = false);
    public function Reports_GetClosedBatchTransactions(GetClosedBatchTransactionsRequest $request, $timeout = false);
    public function Reports_GetOpenAuths(GetOpenAuthsRequest $request, $timeout = false);
    public function Reports_GetTransactionDetails(GetTransactionDetailsRequest $request, $timeout = false);
    public function Reports_GetBatchHistory(GetBatchHistoryRequest $request, $timeout = false);
}

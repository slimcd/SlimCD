<?php

namespace SlimCD\Interfaces;

use \SlimCD\Sessions\CancelSessionRequest;
use \SlimCD\Sessions\CheckSessionRequest;
use \SlimCD\Sessions\CreateSessionRequest;
use \SlimCD\Sessions\DestroySessionsRequest;
use \SlimCD\Sessions\GetSessionFieldsRequest;
use \SlimCD\Sessions\MultiSessionRequest;
use \SlimCD\Sessions\SearchSessionsRequest;
use \SlimCD\Sessions\SendSessionRequest;
use \SlimCD\Sessions\ShowSessionRequest;
use \SlimCD\Sessions\SpawnSessionsRequest;

interface Sessions {
    public function Sessions_CancelSession(CancelSessionRequest $request, $timeout = false);
    public function Sessions_CheckSession(CheckSessionRequest $request, $timeout = false);
    public function Sessions_CreateSession(CreateSessionRequest $request, $timeout = false);
    public function Sessions_DestroySessions(DestroySessionsRequest $request, $timeout = false);
    public function Sessions_GetSessionFields(GetSessionFieldsRequest $request, $timeout = false);
    public function Sessions_MultiSession(MultiSessionRequest $request);
    public function Sessions_SearchSessions(SearchSessionsRequest $request, $timeout = false);
    public function Sessions_SendSession(SendSessionRequest $request, $timeout = false);
    public function Sessions_ShowSession(ShowSessionRequest $request);
    public function Sessions_SpawnSessions(SpawnSessionsRequest $request, $timeout = false);
}

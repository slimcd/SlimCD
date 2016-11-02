<?php

namespace SlimCD\Interfaces;

use \SlimCD\Login\GetUserSettingsRequest;
use \SlimCD\Login\GetUserClientsRequest;
use \SlimCD\Login\GetUserClientSiteRequest;

interface Login {
    public function Login_GetUserSettings(GetUserSettingsRequest $request, $timeout = false);
    public function Login_GetUserClients(GetUserClientsRequest $request, $timeout = false);
    public function Login_GetUserClientSite(GetUserClientSiteRequest $request, $timeout = false);
}

<?php

namespace SlimCD\Login;

use SlimCD\SlimCD;

class Login extends SlimCD implements \SlimCD\Interfaces\Login
{
    public function getUserSettings(GetUserSettingsRequest $request, $timeout = false)
    {
        $timeout = $this->getTimeout($timeout);
        return ($this->httpPost($this->statsURL . "/soft/json/jsonscript.asp?service=GetUserSettings", $timeout, $request->jsonSerialize()));
    }

    public function getUserClients(GetUserClientsRequest $request, $timeout = false)
    {
        $timeout = $this->getTimeout($timeout);
        return ($this->httpPost($this->statsURL . "/soft/json/jsonscript.asp?service=GetUserClients", $timeout, $request->jsonSerialize()));
    }

    public function getUserClientSite(GetUserClientSiteRequest $request, $timeout = false)
    {
        $timeout = $this->getTimeout($timeout);
        return ($this->httpPost($this->statsURL . "/soft/json/jsonscript.asp?service=GetUserClientSite", $timeout, $request->jsonSerialize()));
    }
}
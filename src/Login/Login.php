<?php

namespace SlimCD\Login;

use SlimCD\SlimCD;

class Login extends SlimCD
{
    public function Login_GetUserSettings(GetUserSettingsRequest $request, $timeout = false)
    {
        $timeout = $this->getTimeout($timeout);
        return ($this->HttpPost($this->statsURL . "/soft/json/jsonscript.asp?service=GetUserSettings", $timeout, $request->jsonSerialize()));
    }

    public function Login_GetUserClients(GetUserClientsRequest $request, $timeout = false)
    {
        $timeout = $this->getTimeout($timeout);
        return ($this->HttpPost($this->statsURL . "/soft/json/jsonscript.asp?service=GetUserClients", $timeout, $request->jsonSerialize()));
    }

    public function Login_GetUserClientSite(GetUserClientSiteRequest $request, $timeout = false)
    {
        $timeout = $this->getTimeout($timeout);
        return ($this->HttpPost($this->statsURL . "/soft/json/jsonscript.asp?service=GetUserClientSite", $timeout, $request->jsonSerialize()));
    }
}
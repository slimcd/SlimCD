<?php

namespace SlimCD\Login;

use SlimCD\SlimCD;

/**
 * Class Login
 * @package SlimCD\Login
 */
class Login extends SlimCD implements \SlimCD\Interfaces\Login
{
    /**
     * @param GetUserSettingsRequest $request
     * @param bool $timeout
     * @return mixed|object
     */
    public function getUserSettings(GetUserSettingsRequest $request, $timeout = false)
    {
        $timeout = $this->getTimeout($timeout);
        return ($this->httpPost($this->statsURL . "/soft/json/jsonscript.asp?service=GetUserSettings", $timeout, $request->jsonSerialize()));
    }

    /**
     * @param GetUserClientsRequest $request
     * @param bool $timeout
     * @return mixed|object
     */
    public function getUserClients(GetUserClientsRequest $request, $timeout = false)
    {
        $timeout = $this->getTimeout($timeout);
        return ($this->httpPost($this->statsURL . "/soft/json/jsonscript.asp?service=GetUserClients", $timeout, $request->jsonSerialize()));
    }

    /**
     * @param GetUserClientSiteRequest $request
     * @param bool $timeout
     * @return mixed|object
     */
    public function getUserClientSite(GetUserClientSiteRequest $request, $timeout = false)
    {
        $timeout = $this->getTimeout($timeout);
        return ($this->httpPost($this->statsURL . "/soft/json/jsonscript.asp?service=GetUserClientSite", $timeout, $request->jsonSerialize()));
    }
}

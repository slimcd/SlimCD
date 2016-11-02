<?php

namespace SlimCD\Sessions;

use SlimCD\SlimCD;

class Sessions extends SlimCD implements \SlimCD\Interfaces\Sessions
{
    public function cancelSession(CancelSessionRequest $request, $timeout = false)
    {
        $timeout = $this->getTimeout($timeout);
        return ($this->httpPost($this->statsURL . "/soft/json/jsonscript.asp?service=CancelSession", $timeout, $request->jsonSerialize()));
    }

    public function checkSession(CheckSessionRequest $request, $timeout = false)
    {
        $timeout = $this->getTimeout($timeout);
        return ($this->httpPost($this->statsURL . "/soft/json/jsonscript.asp?service=CheckSession", $timeout, $request->jsonSerialize()));
    }

    public function createSession(CreateSessionRequest $request, $timeout = false)
    {
        $timeout = $this->getTimeout($timeout);
        return ($this->httpPost($this->statsURL . "/soft/json/jsonscript.asp?service=CreateSession", $timeout, $request->jsonSerialize()));
    }

    public function destroySessions(DestroySessionsRequest $request, $timeout = false)
    {
        $timeout = $this->getTimeout($timeout);
        return ($this->httpPost($this->statsURL . "/soft/json/jsonscript.asp?service=DestroySessions", $timeout, $request->jsonSerialize()));
    }

    public function getSessionFields(GetSessionFieldsRequest $request, $timeout = false)
    {
        $timeout = $this->getTimeout($timeout);
        return ($this->httpPost($this->statsURL . "/soft/json/jsonscript.asp?service=GetSessionFields", $timeout, $request->jsonSerialize()));
    }

    public function multiSession(MultiSessionRequest $request)
    {
        if($request->amount == "") {
            return ($this->statsURL . "/soft/mulisession.asp?sessionid=" . urlencode($request->sessionid));
        } else {
            return ($this->statsURL . "/soft/mulisession.asp?sessionid=" . urlencode($request->sessionid) . "&amount=" . urlencode($request->amount));
        }
    }

    public function searchSessions(SearchSessionsRequest $request, $timeout = false)
    {
        $timeout = $this->getTimeout($timeout);
        return ($this->httpPost($this->statsURL . "/soft/json/jsonscript.asp?service=SearchSessions", $timeout, $request->jsonSerialize()));
    }

    public function sendSession(SendSessionRequest $request, $timeout = false)
    {
        $timeout = $this->getTimeout($timeout);
        return ($this->httpPost($this->statsURL . "/soft/json/jsonscript.asp?service=SendSession", $timeout, $request->jsonSerialize()));
    }

    public function showSession(ShowSessionRequest $request)
    {
        return ($this->statsURL . "/soft/showsession.asp?sessionid=" . urlencode($request->sessionid));
    }

    public function spawnSessions(SpawnSessionsRequest $request, $timeout = false)
    {
        $timeout = $this->getTimeout($timeout);
        return ($this->httpPost($this->statsURL . "/soft/json/jsonscript.asp?service=SpawnSessions", $timeout, $request->jsonSerialize()));
    }
}
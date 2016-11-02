<?php

namespace SlimCD\Sessions;

use SlimCD\SlimCD;

class Sessions extends SlimCD
{
    public function Sessions_CancelSession(CancelSessionRequest $request, $timeout = false)
    {
        $timeout = $this->getTimeout($timeout);
        return ($this->HttpPost($this->statsURL . "/soft/json/jsonscript.asp?service=CancelSession", $timeout, $request->jsonSerialize()));
    }

    public function Sessions_CheckSession(CheckSessionRequest $request, $timeout = false)
    {
        $timeout = $this->getTimeout($timeout);
        return ($this->HttpPost($this->statsURL . "/soft/json/jsonscript.asp?service=CheckSession", $timeout, $request->jsonSerialize()));
    }

    public function Sessions_CreateSession(CreateSessionRequest $request, $timeout = false)
    {
        $timeout = $this->getTimeout($timeout);
        return ($this->HttpPost($this->statsURL . "/soft/json/jsonscript.asp?service=CreateSession", $timeout, $request->jsonSerialize()));
    }

    public function Sessions_DestroySessions(DestroySessionsRequest $request, $timeout = false)
    {
        $timeout = $this->getTimeout($timeout);
        return ($this->HttpPost($this->statsURL . "/soft/json/jsonscript.asp?service=DestroySessions", $timeout, $request->jsonSerialize()));
    }

    public function Sessions_GetSessionFields(GetSessionFieldsRequest $request, $timeout = false)
    {
        $timeout = $this->getTimeout($timeout);
        return ($this->HttpPost($this->statsURL . "/soft/json/jsonscript.asp?service=GetSessionFields", $timeout, $request->jsonSerialize()));
    }

    public function Sessions_MultiSession(MultiSessionRequest $request)
    {
        if($request->amount == "") {
            return ($this->statsURL . "/soft/mulisession.asp?sessionid=" . urlencode($request->sessionid));
        } else {
            return ($this->statsURL . "/soft/mulisession.asp?sessionid=" . urlencode($request->sessionid) . "&amount=" . urlencode($request->amount));
        }
    }

    public function Sessions_SearchSessions(SearchSessionsRequest $request, $timeout = false)
    {
        $timeout = $this->getTimeout($timeout);
        return ($this->HttpPost($this->statsURL . "/soft/json/jsonscript.asp?service=SearchSessions", $timeout, $request->jsonSerialize()));
    }

    public function Sessions_SendSession(SendSessionRequest $request, $timeout = false)
    {
        $timeout = $this->getTimeout($timeout);
        return ($this->HttpPost($this->statsURL . "/soft/json/jsonscript.asp?service=SendSession", $timeout, $request->jsonSerialize()));
    }

    public function Sessions_ShowSession(ShowSessionRequest $request)
    {
        return ($this->statsURL . "/soft/showsession.asp?sessionid=" . urlencode($request->sessionid));
    }

    public function Sessions_SpawnSessions(SpawnSessionsRequest $request, $timeout = false)
    {
        $timeout = $this->getTimeout($timeout);
        return ($this->HttpPost($this->statsURL . "/soft/json/jsonscript.asp?service=SpawnSessions", $timeout, $request->jsonSerialize()));
    }
}
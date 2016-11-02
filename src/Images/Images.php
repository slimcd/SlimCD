<?php

namespace SlimCD\Images;

use SlimCD\SlimCD;

class Images extends SlimCD implements \SlimCD\Interfaces\Images
{
    public function downloadSignature(DownloadSignatureRequest $request, $timeout = false)
    {
        $timeout = $this->getTimeout($timeout);
        return ($this->httpPost($this->statsURL . "/soft/json/jsonscript.asp?service=DownloadSignature", $timeout, $request->jsonSerialize()));
    }

    public function downloadReceipt(DownloadReceiptRequest $request, $timeout = false)
    {
        $timeout = $this->getTimeout($timeout);
        return ($this->httpPost($this->statsURL . "/soft/json/jsonscript.asp?service=DownloadReceipt", $timeout, $request->jsonSerialize()));
    }

    public function downloadCheck(DownloadCheckRequest $request, $timeout = false)
    {
        $timeout = $this->getTimeout($timeout);
        return ($this->httpPost($this->statsURL . "/soft/json/jsonscript.asp?service=DownloadCheck", $timeout, $request->jsonSerialize()));
    }

    public function uploadSignature(UploadSignatureRequest $request, $timeout = false)
    {
        $timeout = $this->getTimeout($timeout);
        return ($this->httpPost($this->transURL . "/soft/json/jsonscript.asp?service=UploadSignature", $timeout, $request->jsonSerialize()));
    }

    public function uploadReceipt(UploadReceiptRequest $request, $timeout = false)
    {
        $timeout = $this->getTimeout($timeout);
        return ($this->httpPost($this->transURL . "/soft/json/jsonscript.asp?service=UploadReceipt", $timeout, $request->jsonSerialize()));
    }

    public function uploadCheck(UploadCheckRequest $request, $timeout = false)
    {
        $timeout = $this->getTimeout($timeout);
        return ($this->httpPost($this->transURL . "/soft/json/jsonscript.asp?service=UploadCheck", $timeout, $request->jsonSerialize()));
    }

    public function getReceipt(GetReceiptRequest $request, $timeout = false)
    {
        $timeout = $this->getTimeout($timeout);
        return ($this->httpPost($this->statsURL . "/soft/json/jsonscript.asp?service=GetReceipt", $timeout, $request->jsonSerialize()));
    }

    public function sendReceipt(SendReceiptRequest $request, $timeout = false)
    {
        $timeout = $this->getTimeout($timeout);
        return ($this->httpPost($this->transURL . "/soft/json/jsonscript.asp?service=SendReceipt", $timeout, $request->jsonSerialize()));
    }

    public function getSignatureImage(GetSignatureImageRequest $request, $timeout = false)
    {
        $timeout = $this->getTimeout($timeout);
        return ($this->httpPost($this->transURL . "/soft/json/jsonscript.asp?service=GetSignatureImage", $timeout, $request->jsonSerialize()));
    }
}
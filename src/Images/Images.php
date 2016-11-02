<?php

namespace SlimCD\Images;

use SlimCD\SlimCD;

class Images extends SlimCD implements \SlimCD\Interfaces\Images
{
    public function Images_DownloadSignature(DownloadSignatureRequest $request, $timeout = false)
    {
        $timeout = $this->getTimeout($timeout);
        return ($this->HttpPost($this->statsURL . "/soft/json/jsonscript.asp?service=DownloadSignature", $timeout, $request->jsonSerialize()));
    }

    public function Images_DownloadReceipt(DownloadReceiptRequest $request, $timeout = false)
    {
        $timeout = $this->getTimeout($timeout);
        return ($this->HttpPost($this->statsURL . "/soft/json/jsonscript.asp?service=DownloadReceipt", $timeout, $request->jsonSerialize()));
    }

    public function Images_DownloadCheck(DownloadCheckRequest $request, $timeout = false)
    {
        $timeout = $this->getTimeout($timeout);
        return ($this->HttpPost($this->statsURL . "/soft/json/jsonscript.asp?service=DownloadCheck", $timeout, $request->jsonSerialize()));
    }

    public function Images_UploadSignature(UploadSignatureRequest $request, $timeout = false)
    {
        $timeout = $this->getTimeout($timeout);
        return ($this->HttpPost($this->transURL . "/soft/json/jsonscript.asp?service=UploadSignature", $timeout, $request->jsonSerialize()));
    }

    public function Images_UploadReceipt(UploadReceiptRequest $request, $timeout = false)
    {
        $timeout = $this->getTimeout($timeout);
        return ($this->HttpPost($this->transURL . "/soft/json/jsonscript.asp?service=UploadReceipt", $timeout, $request->jsonSerialize()));
    }

    public function Images_UploadCheck(UploadCheckRequest $request, $timeout = false)
    {
        $timeout = $this->getTimeout($timeout);
        return ($this->HttpPost($this->transURL . "/soft/json/jsonscript.asp?service=UploadCheck", $timeout, $request->jsonSerialize()));
    }

    public function Images_GetReceipt(GetReceiptRequest $request, $timeout = false)
    {
        $timeout = $this->getTimeout($timeout);
        return ($this->HttpPost($this->statsURL . "/soft/json/jsonscript.asp?service=GetReceipt", $timeout, $request->jsonSerialize()));
    }

    public function Images_SendReceipt(SendReceiptRequest $request, $timeout = false)
    {
        $timeout = $this->getTimeout($timeout);
        return ($this->HttpPost($this->transURL . "/soft/json/jsonscript.asp?service=SendReceipt", $timeout, $request->jsonSerialize()));
    }

    public function Images_GetSignatureImage(GetSignatureImageRequest $request, $timeout = false)
    {
        $timeout = $this->getTimeout($timeout);
        return ($this->HttpPost($this->transURL . "/soft/json/jsonscript.asp?service=GetSignatureImage", $timeout, $request->jsonSerialize()));
    }
}
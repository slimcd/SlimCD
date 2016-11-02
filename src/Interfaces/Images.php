<?php

namespace SlimCD\Interfaces;

use \SlimCD\Images\DownloadSignatureRequest;
use \SlimCD\Images\DownloadReceiptRequest;
use \SlimCD\Images\DownloadCheckRequest;
use \SlimCD\Images\UploadSignatureRequest;
use \SlimCD\Images\UploadReceiptRequest;
use \SlimCD\Images\UploadCheckRequest;
use \SlimCD\Images\GetReceiptRequest;
use \SlimCD\Images\SendReceiptRequest;
use \SlimCD\Images\GetSignatureImageRequest;

interface Images {
    public function Images_DownloadSignature(DownloadSignatureRequest $request, $timeout = false);
    public function Images_DownloadReceipt(DownloadReceiptRequest $request, $timeout = false);
    public function Images_DownloadCheck(DownloadCheckRequest $request, $timeout = false);
    public function Images_UploadSignature(UploadSignatureRequest $request, $timeout = false);
    public function Images_UploadReceipt(UploadReceiptRequest $request, $timeout = false);
    public function Images_UploadCheck(UploadCheckRequest $request, $timeout = false);
    public function Images_GetReceipt(GetReceiptRequest $request, $timeout = false);
    public function Images_SendReceipt(SendReceiptRequest $request, $timeout = false);
    public function Images_GetSignatureImage(GetSignatureImageRequest $request, $timeout = false);
}

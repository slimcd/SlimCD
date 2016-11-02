<?php

namespace SlimCD;

use \SlimCD\Images\DownloadSignatureRequest;
use \SlimCD\Images\DownloadReceiptRequest;
use \SlimCD\Images\DownloadCheckRequest;
use \SlimCD\Images\UploadSignatureRequest;
use \SlimCD\Images\UploadReceiptRequest;
use \SlimCD\Images\UploadCheckRequest;
use \SlimCD\Images\GetReceiptRequest;
use \SlimCD\Images\SendReceiptRequest;
use \SlimCD\Images\GetSignatureImageRequest;

use \SlimCD\Login\GetUserSettingsRequest;
use \SlimCD\Login\GetUserClientsRequest;
use \SlimCD\Login\GetUserClientSiteRequest;

use \SlimCD\Reports\GetOpenBatchRequest;
use \SlimCD\Reports\SearchTransactionsRequest;
use \SlimCD\Reports\GetDailySummaryRequest;
use \SlimCD\Reports\GetBatchSummaryRequest;
use \SlimCD\Reports\GetClosedBatchTransactionsRequest;
use \SlimCD\Reports\GetOpenAuthsRequest;
use \SlimCD\Reports\GetTransactionDetailsRequest;
use \SlimCD\Reports\GetBatchHistoryRequest;

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

use \SlimCD\Transact\ProcessTransactionRequest;
use \SlimCD\Transact\CloseBatchRequest;

/**
 * Class SlimCD
 * @package SlimCD
 * @todo create a trait for timeout code that is repeated
 * @todo change SlimCD method names
 * @todo add visibility to methods
 * @todo add doc blocks
 * @todo create interface
 */
class SlimCD
{
    public $transURL = "https://trans.slimcd.com";
    public $statsURL = "https://stats.slimcd.com";
    public $debug = false;
    private $senddata;
    private $recvdata;

    /* Images Methods */

    function Images_DownloadSignature(DownloadSignatureRequest $request, $timeout = false)
    {
        $default_timeout = 600 ;

        if(!$timeout) {
            $timeout = $default_timeout;
        } else {
            $timeout=intval($timeout);
            if($timeout === 0) {
                $timeout = $default_timeout;
            }
        }

        return ($this->HttpPost($this->statsURL . "/soft/json/jsonscript.asp?service=DownloadSignature", $timeout, $request->jsonSerialize()));
    }

    function Images_DownloadReceipt(DownloadReceiptRequest $request, $timeout = false)
    {
        $default_timeout = 600;

        if(!$timeout) {
            $timeout = $default_timeout;
        } else {
            $timeout=intval($timeout);
            if($timeout === 0) {
                $timeout = $default_timeout;
            }
        }

        return ($this->HttpPost($this->statsURL . "/soft/json/jsonscript.asp?service=DownloadReceipt", $timeout, $request->jsonSerialize()));
    }

    function Images_DownloadCheck(DownloadCheckRequest $request, $timeout = false)
    {
        $default_timeout = 600;

        if(!$timeout) {
            $timeout = $default_timeout;
        } else {
            $timeout=intval($timeout);
            if($timeout === 0) {
                $timeout = $default_timeout;
            }
        }

        return ($this->HttpPost($this->statsURL . "/soft/json/jsonscript.asp?service=DownloadCheck", $timeout, $request->jsonSerialize()));
    }

    function Images_UploadSignature(UploadSignatureRequest $request, $timeout = false)
    {
        $default_timeout = 600;

        if(!$timeout) {
            $timeout = $default_timeout;
        } else {
            $timeout=intval($timeout);
            if($timeout === 0) {
                $timeout = $default_timeout;
            }
        }

        return ( $this->HttpPost($this->transURL . "/soft/json/jsonscript.asp?service=UploadSignature",$timeout,$request->jsonSerialize()) );
    }

    function Images_UploadReceipt(UploadReceiptRequest $request, $timeout = false)
    {
        $default_timeout = 600;

        if(!$timeout) {
            $timeout = $default_timeout;
        } else {
            $timeout=intval($timeout);
            if($timeout === 0) {
                $timeout = $default_timeout;
            }
        }

        return ( $this->HttpPost($this->transURL . "/soft/json/jsonscript.asp?service=UploadReceipt",$timeout,$request->jsonSerialize()) );
    }

    function Images_UploadCheck(UploadCheckRequest $request, $timeout = false)
    {
        $default_timeout = 600;

        if(!$timeout) {
            $timeout = $default_timeout;
        } else {
            $timeout=intval($timeout);
            if($timeout === 0) {
                $timeout = $default_timeout;
            }
        }

        return ( $this->HttpPost($this->transURL . "/soft/json/jsonscript.asp?service=UploadCheck",$timeout,$request->jsonSerialize()) );
    }

    function Images_GetReceipt(GetReceiptRequest $request, $timeout = false)
    {

        $default_timeout = 600;

        if(!$timeout) {
            $timeout = $default_timeout;
        } else {
            $timeout=intval($timeout);
            if($timeout === 0) {
                $timeout = $default_timeout;
            }
        }

        return ( $this->HttpPost($this->statsURL . "/soft/json/jsonscript.asp?service=GetReceipt",$timeout,$request->jsonSerialize()) );
    }

    function Images_SendReceipt(SendReceiptRequest $request, $timeout = false)
    {

        $default_timeout = 600;

        if(!$timeout) {
            $timeout = $default_timeout;
        } else {
            $timeout=intval($timeout);
            if($timeout === 0) {
                $timeout = $default_timeout;
            }
        }

        return ( $this->HttpPost($this->transURL . "/soft/json/jsonscript.asp?service=SendReceipt",$timeout,$request->jsonSerialize()) );
    }

    function Images_GetSignatureImage(GetSignatureImageRequest $request, $timeout = false)
    {

        $default_timeout = 600;

        if(!$timeout) {
            $timeout = $default_timeout;
        } else {
            $timeout=intval($timeout);
            if($timeout === 0) {
                $timeout = $default_timeout;
            }
        }

        return ( $this->HttpPost($this->transURL . "/soft/json/jsonscript.asp?service=GetSignatureImage",$timeout,$request->jsonSerialize()) );
    }

    /* Login Methods */

    function Login_GetUserSettings(GetUserSettingsRequest $request, $timeout = false)
    {
        $default_timeout = 600;

        if(!$timeout) {
            $timeout = $default_timeout;
        } else {
            $timeout=intval($timeout);
            if($timeout === 0) {
                $timeout = $default_timeout;
            }
        }

        return ( $this->HttpPost($this->statsURL . "/soft/json/jsonscript.asp?service=GetUserSettings",$timeout,$request->jsonSerialize()) );
    }

    function Login_GetUserClients(GetUserClientsRequest $request, $timeout = false)
    {
        $default_timeout = 600 ;

        if(!$timeout) {
            $timeout = $default_timeout;
        } else {
            $timeout=intval($timeout);
            if($timeout === 0) {
                $timeout = $default_timeout;
            }
        }

        return ($this->HttpPost($this->statsURL . "/soft/json/jsonscript.asp?service=GetUserClients", $timeout, $request->jsonSerialize()));
    }

    function Login_GetUserClientSite(GetUserClientSiteRequest $request, $timeout = false)
    {
        $default_timeout = 600;

        if(!$timeout) {
            $timeout = $default_timeout;
        } else {
            $timeout=intval($timeout);
            if($timeout === 0) {
                $timeout = $default_timeout;
            }
        }

        return ( $this->HttpPost($this->statsURL . "/soft/json/jsonscript.asp?service=GetUserClientSite",$timeout,$request->jsonSerialize()) );
    }

    /* Reports Methods */

    function Reports_GetOpenBatch(GetOpenBatchRequest $request, $timeout = false)
    {

        $default_timeout = 600;

        if(!$timeout) {
            $timeout = $default_timeout;
        } else {
            $timeout=intval($timeout);
            if($timeout === 0) {
                $timeout = $default_timeout;
            }
        }

        return ( $this->HttpPost($this->statsURL . "/soft/json/jsonscript.asp?service=GetOpenBatch2",$timeout, $request->jsonSerialize()));
    }

    function Reports_SearchTransactions(SearchTransactionsRequest $request, $timeout = false)
    {
        $default_timeout = 600;

        if(!$timeout) {
            $timeout = $default_timeout;
        } else {
            $timeout=intval($timeout);
            if($timeout === 0) {
                $timeout = $default_timeout;
            }
        }

        return ( $this->HttpPost($this->statsURL . "/soft/json/jsonscript.asp?service=SearchTransactions2",$timeout,$request->jsonSerialize()) );
    }

    function Reports_GetDailySummary(GetDailySummaryRequest $request, $timeout = false)
    {
        $default_timeout = 600;

        if(!$timeout) {
            $timeout = $default_timeout;
        } else {
            $timeout = intval($timeout);
            if($timeout === 0) {
                $timeout = $default_timeout;
            }
        }

        return ($this->HttpPost($this->statsURL . "/soft/json/jsonscript.asp?service=GetDailySummary", $timeout, $request->jsonSerialize()));
    }

    function Reports_GetBatchSummary(GetBatchSummaryRequest $request, $timeout = false)
    {
        $default_timeout = 600;

        if(!$timeout) {
            $timeout = $default_timeout;
        } else {
            $timeout = intval($timeout);
            if($timeout === 0) {
                $timeout = $default_timeout;
            }
        }

        return ($this->HttpPost($this->statsURL . "/soft/json/jsonscript.asp?service=GetBatchSummary2", $timeout, $request->jsonSerialize()));
    }

    function Reports_GetClosedBatchTransactions(GetClosedBatchTransactionsRequest $request, $timeout = false)
    {
        $default_timeout = 600;

        if(!$timeout) {
            $timeout = $default_timeout;
        } else {
            $timeout=intval($timeout);
            if($timeout === 0) {
                $timeout = $default_timeout;
            }
        }

        return ($this->HttpPost($this->statsURL . "/soft/json/jsonscript.asp?service=GetClosedBatchTransactions2", $timeout, $request->jsonSerialize()));
    }

    function Reports_GetOpenAuths(GetOpenAuthsRequest $request, $timeout = false)
    {
        $default_timeout = 600;

        if(!$timeout) {
            $timeout = $default_timeout;
        } else {
            $timeout = intval($timeout);
            if($timeout === 0) {
                $timeout = $default_timeout;
            }
        }

        return ($this->HttpPost($this->statsURL . "/soft/json/jsonscript.asp?service=GetOpenAuths2", $timeout, $request->jsonSerialize()));
    }

    function Reports_GetTransactionDetails(GetTransactionDetailsRequest $request, $timeout = false)
    {
        $default_timeout = 600;

        if(!$timeout) {
            $timeout = $default_timeout;
        } else {
            $timeout=intval($timeout);
            if($timeout === 0) {
                $timeout = $default_timeout;
            }
        }

        return ( $this->HttpPost($this->statsURL . "/soft/json/jsonscript.asp?service=GetTransactionDetails2",$timeout,$request->jsonSerialize()) );
    }

    function Reports_GetBatchHistory(GetBatchHistoryRequest $request, $timeout = false)
    {
        $default_timeout = 600;

        if(!$timeout) {
            $timeout = $default_timeout;
        } else {
            $timeout=intval($timeout);
            if($timeout === 0) {
                $timeout = $default_timeout;
            }
        }

        return ( $this->HttpPost($this->statsURL . "/soft/json/jsonscript.asp?service=GetBatchHistory2",$timeout,$request->jsonSerialize()) );
    }

    /* Sessions Methods */

    function Sessions_CancelSession(CancelSessionRequest $request, $timeout = false)
    {
        $default_timeout = 600;

        if(!$timeout) {
            $timeout = $default_timeout;
        } else {
            $timeout=intval($timeout);
            if($timeout === 0) {
                $timeout = $default_timeout;
            }
        }

        return ($this->HttpPost($this->statsURL . "/soft/json/jsonscript.asp?service=CancelSession", $timeout, $request->jsonSerialize()));
    }

    function Sessions_CheckSession(CheckSessionRequest $request, $timeout = false)
    {
        $default_timeout = 600;

        if(!$timeout) {
            $timeout = $default_timeout;
        } else {
            $timeout=intval($timeout);
            if($timeout === 0) {
                $timeout = $default_timeout;
            }
        }

        return ( $this->HttpPost($this->statsURL . "/soft/json/jsonscript.asp?service=CheckSession",$timeout, $request->jsonSerialize()));
    }

    function Sessions_CreateSession(CreateSessionRequest $request, $timeout = false)
    {
        $default_timeout = 600;

        if(!$timeout) {
            $timeout = $default_timeout;
        } else {
            $timeout=intval($timeout);
            if($timeout === 0) {
                $timeout = $default_timeout;
            }
        }

        return ( $this->HttpPost($this->statsURL . "/soft/json/jsonscript.asp?service=CreateSession",$timeout, $request->jsonSerialize()));
    }

    function Sessions_DestroySessions(DestroySessionsRequest $request, $timeout = false)
    {
        $default_timeout = 600;

        if(!$timeout) {
            $timeout = $default_timeout;
        } else {
            $timeout=intval($timeout);
            if($timeout === 0) {
                $timeout = $default_timeout;
            }
        }

        return ( $this->HttpPost($this->statsURL . "/soft/json/jsonscript.asp?service=DestroySessions",$timeout, $request->jsonSerialize()));
    }

    function Sessions_GetSessionFields(GetSessionFieldsRequest $request, $timeout = false)
    {
        $default_timeout = 600;

        if(!$timeout) {
            $timeout = $default_timeout;
        } else {
            $timeout=intval($timeout);
            if($timeout === 0) {
                $timeout = $default_timeout;
            }
        }

        return ( $this->HttpPost($this->statsURL . "/soft/json/jsonscript.asp?service=GetSessionFields",$timeout, $request->jsonSerialize()));
    }

    function Sessions_MultiSession(MultiSessionRequest $request)
    {
        if ($request->amount == "") {
            return ($this->statsURL . "/soft/mulisession.asp?sessionid=" . urlencode($request->sessionid));
        } else {
            return ($this->statsURL . "/soft/mulisession.asp?sessionid=" . urlencode($request->sessionid) . "&amount=" . urlencode($request->amount));
        }
    }

    function Sessions_SearchSessions(SearchSessionsRequest $request, $timeout = false)
    {
        $default_timeout = 600;

        if(!$timeout) {
            $timeout = $default_timeout;
        } else {
            $timeout=intval($timeout);
            if($timeout === 0) {
                $timeout = $default_timeout;
            }
        }

        return ( $this->HttpPost($this->statsURL . "/soft/json/jsonscript.asp?service=SearchSessions",$timeout, $request->jsonSerialize()));
    }

    function Sessions_SendSession(SendSessionRequest $request, $timeout = false)
    {
        $default_timeout = 600;

        if(!$timeout) {
            $timeout = $default_timeout;
        } else {
            $timeout=intval($timeout);
            if($timeout === 0) {
                $timeout = $default_timeout;
            }
        }

        return ( $this->HttpPost($this->statsURL . "/soft/json/jsonscript.asp?service=SendSession",$timeout, $request->jsonSerialize()));
    }

    function Sessions_ShowSession(ShowSessionRequest $request)
    {
        return ($this->statsURL . "/soft/showsession.asp?sessionid=" . urlencode($request->sessionid));
    }

    function Sessions_SpawnSessions(SpawnSessionsRequest $request, $timeout = false)
    {
        $default_timeout = 600;

        if(!$timeout) {
            $timeout = $default_timeout;
        } else {
            $timeout=intval($timeout);
            if($timeout === 0) {
                $timeout = $default_timeout;
            }
        }

        return ( $this->HttpPost($this->statsURL . "/soft/json/jsonscript.asp?service=SpawnSessions",$timeout, $request->jsonSerialize()));
    }

    /* Transact Methods */

    function Transact_ProcessTransaction(ProcessTransactionRequest $request, $timeout = false)
    {
        $default_timeout = 90;

        if(!$timeout) {
            $timeout = $default_timeout;
        } else {
            $timeout = intval($timeout);
            if($timeout === 0) {
                $timeout = $default_timeout;
            }
        }

        return ($this->HttpPost($this->transURL . "/soft/json/jsonpayment.asp", $timeout, $request->jsonSerialize()));
    }

    function Transact_CloseBatch(CloseBatchRequest $request, $timeout = false)
    {
        $default_timeout = 600 ;

        if(!$timeout) {
            $timeout = $default_timeout;
        } else {
            $timeout = intval($timeout);
            if($timeout === 0) {
                $timeout = $default_timeout;
            }
        }

        return ($this->HttpPost($this->transURL . "/soft/json/jsonscript.asp?service=CloseBatch", $timeout, $request->jsonSerialize()));
    }

    protected function StandardErrorBlock($url, $errortext)
    {
        $reply = (object) array('response'=>'Error', 'responsecode' => '2', 'description' => $errortext , 'responseurl' => $url ,'datablock' => '');
        $result = (object) array('reply' => $reply) ;

        return ($result ) ;
    }

    protected function HttpPost($urlString, $timeout, $namevalueArray)
    {
        $ch = curl_init($urlString);

        curl_setopt($ch,CURLOPT_TIMEOUT,$timeout) ;
        curl_setopt($ch, CURLOPT_POST, 1);

        $this->senddata = http_build_query($namevalueArray) ;

        curl_setopt($ch, CURLOPT_POSTFIELDS, $this->senddata);

        // SLIMCD.COM uses a GODADDY SSL certificate.  Once you install the CA for GoDaddy SSL, please remove the line below.
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

        // receive server response ...
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 0);

        // POST the data
        $this->recvdata = curl_exec($ch);

        if(curl_errno($ch)) {
            $result = $this->StandardErrorBlock(curl_getinfo($ch, CURLINFO_EFFECTIVE_URL), curl_error($ch));
        } else {

            $httpstatus = curl_getinfo($ch, CURLINFO_HTTP_CODE);
            $contentType = curl_getinfo($ch, CURLINFO_CONTENT_TYPE);

            if (intval($httpstatus) !== 200 || ($contentType !== 'application/json' && $contentType !== 'text/javascript')) {
                $result =  $this->StandardErrorBlock(curl_getinfo($ch, CURLINFO_EFFECTIVE_URL), $this->recvdata) ;
            } else {
                $result = json_decode($this->recvdata);
            }

            // Make sure we can decode the results...
            if($result === null) {
                switch (json_last_error()) {
                    case JSON_ERROR_NONE:
                        $errortext= ' - No errors';
                        break;
                    case JSON_ERROR_DEPTH:
                        $errortext = ' - Maximum stack depth exceeded';
                        break;
                    case JSON_ERROR_STATE_MISMATCH:
                        $errortext = ' - Underflow or the modes mismatch';
                        break;
                    case JSON_ERROR_CTRL_CHAR:
                        $errortext = ' - Unexpected control character found';
                        break;
                    case JSON_ERROR_SYNTAX:
                        $errortext= ' - Syntax error, malformed JSON';
                        break;
                    case JSON_ERROR_UTF8:
                        $errortext = ' - Malformed UTF-8 characters, possibly incorrectly encoded';
                        break;
                    default:
                        $errortext = ' - Unknown JSON error';
                        break;
                }
                $result = $this->StandardErrorBlock($urlString, $errortext);
            }
        }

        curl_close ($ch);

        // flatten out the "reply" so we don't have that extra (unneeded) level
        $myarray = get_object_vars($result->reply);
        if($this->debug) {
            $myarray = array_merge($myarray, array("senddata" => $this->senddata , "recvdata" => $this->recvdata));
        }
        $result = (object) $myarray;

        $this->senddata = '';
        $this->recvdata = '';

        return $result ;
    }
}
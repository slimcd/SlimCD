<?php

namespace SlimCD;

/**
 * Class SlimCD
 * @package SlimCD
 * @todo add doc blocks
 */
abstract class SlimCD implements Interfaces\SlimCD
{
    public $transURL = "https://trans.slimcd.com";
    public $statsURL = "https://stats.slimcd.com";
    public $debug = false;
    protected $senddata;
    protected $recvdata;
    protected $default_timeout = 600;

    protected function standardErrorBlock($url, $errortext)
    {
        $reply = (object) array('response' => 'Error', 'responsecode' => '2', 'description' => $errortext , 'responseurl' => $url ,'datablock' => '');
        $result = (object) array('reply' => $reply) ;

        return ($result);
    }

    protected function httpPost($urlString, $timeout, $namevalueArray)
    {
        $ch = curl_init($urlString);

        curl_setopt($ch,CURLOPT_TIMEOUT, $timeout) ;
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
            $result = $this->standardErrorBlock(curl_getinfo($ch, CURLINFO_EFFECTIVE_URL), curl_error($ch));
        } else {

            $httpstatus = curl_getinfo($ch, CURLINFO_HTTP_CODE);
            $contentType = curl_getinfo($ch, CURLINFO_CONTENT_TYPE);

            if (intval($httpstatus) !== 200 || ($contentType !== 'application/json' && $contentType !== 'text/javascript')) {
                $result =  $this->standardErrorBlock(curl_getinfo($ch, CURLINFO_EFFECTIVE_URL), $this->recvdata) ;
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
                $result = $this->standardErrorBlock($urlString, $errortext);
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

    protected function getTimeout($timeout)
    {
        if(!$timeout) {
            $timeout = $this->default_timeout;
        } else {
            $timeout = intval($timeout);
            if($timeout === 0) {
                $timeout = $this->default_timeout;
            }
        }
        return $timeout;
    }
}
<?php

namespace SlimCD;

use GuzzleHttp\Client;

/**
 * Class SlimCD
 * @package SlimCD
 * @version 1.1.0
 */
abstract class SlimCD implements Interfaces\SlimCD
{
    /**
     * @var string
     */
    public $transactionUrl = "https://trans.slimcd.com";

    /**
     * @var string
     */
    public $statsURL = "https://stats.slimcd.com";

    /**
     * @var bool
     */
    public $debug = false;

    /**
     * Data to send
     * @var
     */
    protected $send;

    /**
     * Data that is received
     * @var
     */
    protected $receive;

    /**
     * Curl timeout
     * @var int
     */
    protected $defaultTimeout = 600;

    /**
     * @param $url
     * @param $errorMessage
     * @return object
     */
    protected function buildError($url, $errorMessage)
    {
        $reply = (object) array(
            'response'     => 'Error',
            'responsecode' => '2',
            'description'  => $errorMessage,
            'responseurl'  => $url,
            'datablock'    => ''
        );
        $result = (object) array('reply' => $reply);

        return ($result);
    }

    /**
     * @param $urlString
     * @param $timeout
     * @param $nameValueArray
     * @return mixed|object
     * @throws \Exception
     */
    protected function httpPost($urlString, $timeout, $nameValueArray)
    {
        $client = new Client(['timeout' => $timeout]);
        $response = $client->request('POST', $urlString, [
            'query' => $nameValueArray
        ]);
        $code = $response->getStatusCode();
        $contentType = $response->getHeader('Content-Type')[0];

        if($code !== 200 || ($contentType !== 'application/json' && $contentType !== 'text/javascript')) {
            throw new \Exception("Not okay");
        } else {
            $jsonBody = $response->getBody();
            $result = json_decode($jsonBody);
        }

        if($result === null) {
            switch (json_last_error()) {
                case JSON_ERROR_NONE:
                    $errorMessage= ' - No errors';
                    break;
                case JSON_ERROR_DEPTH:
                    $errorMessage = ' - Maximum stack depth exceeded';
                    break;
                case JSON_ERROR_STATE_MISMATCH:
                    $errorMessage = ' - Underflow or the modes mismatch';
                    break;
                case JSON_ERROR_CTRL_CHAR:
                    $errorMessage = ' - Unexpected control character found';
                    break;
                case JSON_ERROR_SYNTAX:
                    $errorMessage= ' - Syntax error, malformed JSON';
                    break;
                case JSON_ERROR_UTF8:
                    $errorMessage = ' - Malformed UTF-8 characters, possibly incorrectly encoded';
                    break;
                default:
                    $errorMessage = ' - Unknown JSON error';
                    break;
            }
            throw new \Exception("Json Error " . $errorMessage);
        }

        return $result->reply;
    }

    /**
     * @param $timeout
     * @return int
     */
    protected function getTimeout($timeout)
    {
        if(!$timeout) {
            $timeout = $this->defaultTimeout;
        } else {
            $timeout = intval($timeout);
        }
        return $timeout;
    }
}

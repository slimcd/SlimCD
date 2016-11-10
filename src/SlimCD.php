<?php

namespace SlimCD;

use GuzzleHttp\Client;

/**
 * Class SlimCD
 * @package SlimCD
 * @version 1.1.0
 * @author Levi Durfee <ldurfee@bulldogcreative.com>
 */
abstract class SlimCD implements Interfaces\SlimCD
{
    private $version = '1.1.0';

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
        // @codeCoverageIgnoreStart
        $reply = (object) array(
            'response'     => 'Error',
            'responsecode' => '2',
            'description'  => $errorMessage,
            'responseurl'  => $url,
            'datablock'    => ''
        );
        $result = (object) array('reply' => $reply);

        return ($result);
        // @codeCoverageIgnoreEnd
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
        // get the timeout passed
        $timeout = $this->getTimeout($timeout);

        // create a new Guzzle object and pass timeout to the construct
        $client = new Client(['timeout' => $timeout]);

        // send a post request to the url with the name value array
        $response = $client->request('POST', $urlString, [
            'query' => $nameValueArray,
            'verify' => getcwd() . DIRECTORY_SEPARATOR . 'gd_bundle-g2.crt'
        ]);

        // status codes are good to know and we want it to be 200
        $code = $response->getStatusCode();

        // we should also check the content type as it should always return json
        $contentType = $response->getHeader('Content-Type')[0];

        // check the status code and the content type
        if($code !== 200 || ($contentType !== 'application/json' && $contentType !== 'text/javascript')) {
            // @todo add more verbose exception
            // @codeCoverageIgnoreStart
            throw new \Exception("Not okay"); // if something is wrong throw an exception
            // @codeCoverageIgnoreEnd
        } else {
            // get the body of the response
            $jsonBody = $response->getBody();

            // decode the json into an object
            $result = json_decode($jsonBody);
        }

        // @codeCoverageIgnoreStart
        // NULL is returned if the json cannot be decoded
        if($result === null) {
            switch (json_last_error()) {
                // this case will probably never happen
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
            // @todo test different exceptions
            throw new \Exception("Json Error " . $errorMessage);
        }
        // @codeCoverageIgnoreEnd

        // return the reply same as version 1.0.x
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

    /**
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }
}

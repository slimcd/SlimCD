<?php

use SlimCD\SlimCD;
use SlimCD\Transact\CloseBatchRequest;

class CloseBatchRequestTest extends PHPUnit_Framework_TestCase
{
    public function testCloseBatch()
    {
        $slimcd = new SlimCD();
        $cbr = new CloseBatchRequest();
        $cbr->username = '1032';
        $cbr->password = '289075';
        $cbr->siteid = 228226448;
        $result = $slimcd->Transact_CloseBatch($cbr);
        var_dump($result);
    }
}

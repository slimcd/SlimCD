<?php
use SlimCD\SlimCD;

class SlimCDTests extends PHPUnit_Framework_Testcase {

    public function testInstantiate()
    {
        $SlimCD = new SlimCD();
        $this->assertInstanceOf('SlimCD\SlimCD', $SlimCD);
    }
}

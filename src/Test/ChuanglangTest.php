<?php namespace Ddup\Sms\Test;

use Ddup\Sms\ChuangLan\ChlSms;
use Ddup\Sms\Config\OptionStruct;

class ChuanglangTest extends TestCase
{

    function test_send()
    {
        $config = new OptionStruct(self::config);
        $api    = new ChlSms($config);

        $api->send(self::mobile, '登高一呼时才懂，始终在为你心痛');

        $this->assertTrue($api->result->isSuccess(), $api->result->getMsg());
    }
}
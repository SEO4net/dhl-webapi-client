<?php

namespace tests;

use DHLClient\Client;
use DHLClient\Model\getVersionResponse;
use PHPUnit\Framework\TestCase;

class ClientTest extends TestCase
{
    public function test_returs_api_version()
    {
        $client = new Client(null, null, 'https://sandbox.dhl24.com.pl/webapi2');
        $response = $client->getVersion();

        $this->assertInstanceOf(getVersionResponse::class, $response);
        $this->assertNotNull($response->getGetVersionResult());
    }
}

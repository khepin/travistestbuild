<?php

require __DIR__.'/../vendor/autoload.php';

class StackTest extends PHPUnit_Framework_TestCase
{
    public function testPhp53()
    {
        $client = new \Guzzle\Service\Client('http://travistest.loc');

        $response = $client->get('test_5_3.php')->send();
        $result = $response->getBody(true);
        $this->assertEquals($result, 'Hello world ! ');
    }

    public function testPhp54()
    {
        $client = new \Guzzle\Service\Client('http://travistest.loc');

        $response = $client->get('test_5_4.php')->send();
        $result = $response->getBody(true);
        $this->assertEquals($result, 'Hello world ! ');
    }
}
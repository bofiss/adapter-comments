<?php 

namespace App\Test;

use Liip\FunctionalTestBundle\Test\WebTestCase;

class IamAliveControllerTest extends WebTestCase
{
    /** @test */
    public function iReturn200StatusCode()
    {   
        $client = $this->createClient();
        $client->request(
            'GET',
            '/adapter/comments/i-am-alive'
        );
        $this->assertEquals(200, $client->getResponse()->getStatusCode());

    }
}
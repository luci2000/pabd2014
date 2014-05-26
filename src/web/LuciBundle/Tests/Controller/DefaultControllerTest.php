<?php

namespace web\LuciBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DefaultControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/luci/Homepage');

        $this->assertTrue($crawler->filter('html:contains("Bine ati venit")')->count() > 0);
    }
}

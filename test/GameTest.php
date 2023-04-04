<?php
namespace App\Tests;

class GameTest extends WebTestCase
{
    public function testSomething()
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/articles');
        $this->assertResponseIsSuccessful();
        $this->assertSelectorTextContains('h1', 'Liste des articles');
    }
}

?>
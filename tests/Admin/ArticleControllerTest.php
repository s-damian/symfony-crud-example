<?php

namespace App\Tests\Admin;

use App\Entity\Article;
use App\Repository\ArticleRepository;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class ArticleControllerTest extends WebTestCase
{
    public function testIndexClient()
    {
        $this->assertTrue(1 === 1);

        $client = static::createClient();

        $crawler = $client->request('GET', '/admin/articles');

        $this->assertResponseIsSuccessful();
        $this->assertSelectorTextContains('h1', 'Article Listing');
    }

    public function testCreateClient()
    {
        $this->assertTrue(1 === 1);

        $client = static::createClient();

        $crawler = $client->request('GET', '/admin/articles/create');

        $this->assertResponseIsSuccessful();
        $this->assertSelectorTextContains('h1', 'Create Article');
    }
}

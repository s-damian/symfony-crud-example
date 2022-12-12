<?php

namespace App\Tests\Admin;

use App\Entity\Article;
use App\Repository\ArticleRepository;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class ArticleControllerTest extends WebTestCase
{
    public function testIndexClient(): void
    {
        $this->assertTrue(1 === 1);

        $client = static::createClient();

        $crawler = $client->request('GET', '/admin/articles');

        $this->assertResponseIsSuccessful();
        $this->assertSelectorTextContains('h1', 'Article listing');
    }

    public function testCreateClient(): void
    {
        $this->assertTrue(1 === 1);

        $client = static::createClient();

        $crawler = $client->request('GET', '/admin/articles/create');

        $this->assertResponseIsSuccessful();
        $this->assertSelectorTextContains('h1', 'Create article');
    }

    public function testEditClientWith404Error(): void
    {
        $this->assertTrue(1 === 1);

        $client = static::createClient();

        $crawler = $client->request('GET', '/admin/articles/edit/99999');

        $this->assertResponseStatusCodeSame(404, $client->getResponse()->getStatusCode());
    }

    public function testDeleteClientWith404Error(): void
    {
        $this->assertTrue(1 === 1);

        $client = static::createClient();

        $crawler = $client->request('GET', '/admin/articles/delete/99999');

        $this->assertResponseStatusCodeSame(404, $client->getResponse()->getStatusCode());
    }
}

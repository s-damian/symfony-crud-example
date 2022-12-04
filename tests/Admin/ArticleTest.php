<?php

namespace App\Tests\Admin;

use App\Entity\Article;
use App\Repository\ArticleRepository;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class ArticleTest extends KernelTestCase
{
    public function testIndex()
    {
        $this->assertTrue(1 === 1);

        /*$articleRepository = new ArticleRepository();

        $articles = $articleRepository->findAll();
        var_dump($articles);
        die;*/

        // ...
    }
}

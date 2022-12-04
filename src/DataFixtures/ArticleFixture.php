<?php

namespace App\DataFixtures;

use App\Entity\Article;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class ArticleFixture extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        for ($i=1; $i <= 3; $i++) {
            $article = new Article();
            $article->setTitle('Article '.$i);
            $article->setSlug('article-'.$i);
            $article->setContent('Content Article '.$i);
            $manager->persist($article);
        }

        $manager->flush();
    }
}

<?php

namespace App\Controller\Front;

use App\Entity\Article;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class BlogController extends AbstractController
{
    #[Route('/blog/{slug}', name: 'blog_show', methods: ['GET'])]
    public function show(Article $article): Response
    {
        return $this->render('front/blog/show.html.twig', [
            'article' => $article,
        ]);
    }
}

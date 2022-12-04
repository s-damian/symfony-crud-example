<?php

namespace App\EventListener;

use App\Entity\Article;
use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Event\ExceptionEvent;
use Symfony\Component\HttpKernel\Exception\HttpExceptionInterface;
use Symfony\Component\EventDispatcher\Attribute\AsEventListener;

final class ArticleUpdatedListener
{
    private $logger;
    
    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
    
    public function postUpdate(Article $article)
    {
        $this->logger->info('[__Article "'.$article->getTitle().'" Updated__]');
    }
}

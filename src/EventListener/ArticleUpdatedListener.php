<?php

namespace App\EventListener;

use App\Entity\Article;
use Psr\Log\LoggerInterface;

final class ArticleUpdatedListener
{
    public function __construct(
        private LoggerInterface $logger
    ) {
        $this->logger = $logger;
    }

    public function postUpdate(Article $article): void
    {
        $this->logger->info('[Event: Article "'.$article->getTitle().'" Updated]');
    }
}

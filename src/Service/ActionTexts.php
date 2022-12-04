<?php

namespace App\Service;

final class ActionTexts
{
    public function getSuccessCreate(): string
    {
        return 'Articles added.';
    }

    public function getSuccessEdit(): string
    {
        return 'Articles updated.';
    }

    public function getSuccessDelete(): string
    {
        return 'Articles deleted.';
    }
}

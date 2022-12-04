<?php

namespace App\Service;

use Symfony\Contracts\Translation\TranslatorInterface;

final class ActionTexts
{
    public function __construct(
        private TranslatorInterface $translator
    ) {
        $this->translator = $translator;
    }

    public function getSuccessCreate(): string
    {
        return $this->translator->trans('article.added');
        ;
    }

    public function getSuccessEdit(): string
    {
        return $this->translator->trans('article.updated');
        ;
    }

    public function getSuccessDelete(): string
    {
        return $this->translator->trans('article.deleted');
        ;
    }
}

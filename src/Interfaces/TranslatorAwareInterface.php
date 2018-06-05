<?php

namespace Adtechpotok\Aware\Interfaces;

use Symfony\Component\Translation\TranslatorInterface;

interface TranslatorAwareInterface
{
    /**
     * @param TranslatorInterface $translator
     */
    public function setTranslator(TranslatorInterface $translator): void;
}

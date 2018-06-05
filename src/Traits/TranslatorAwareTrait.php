<?php

namespace Adtechpotok\Aware\Traits;

use Symfony\Component\Translation\TranslatorInterface;

trait TranslatorAwareTrait
{
    /**
     * @var TranslatorInterface
     */
    protected $translator;

    /**
     * @required
     *
     * @param TranslatorInterface $translator
     */
    public function setTranslator(TranslatorInterface $translator): void
    {
        $this->translator = $translator;
    }
}

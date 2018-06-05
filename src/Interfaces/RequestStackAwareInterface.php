<?php

namespace Adtechpotok\Aware\Interfaces;

use Symfony\Component\HttpFoundation\RequestStack;

interface RequestStackAwareInterface
{
    /**
     * @param RequestStack $requestStack
     */
    public function setRequestStack(RequestStack $requestStack);
}

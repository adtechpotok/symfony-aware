<?php

namespace Adtechpotok\Aware\Traits;

use Symfony\Component\HttpFoundation\RequestStack;

trait RequestStackAwareTrait
{
    /**
     * @var RequestStack
     */
    protected $requestStack;

    /**
     * @required
     *
     * @param RequestStack $requestStack
     */
    public function setRequestStack(RequestStack $requestStack)
    {
        $this->requestStack = $requestStack;
    }
}

<?php

namespace Adtechpotok\Aware\Traits;

use Symfony\Component\HttpKernel\HttpKernelInterface;

trait HttpKernelAwareTrait
{
    /**
     * @var HttpKernelInterface
     */
    protected $httpKernel;

    /**
     * @required
     *
     * @param HttpKernelInterface $httpKernel
     */
    public function setHttpKernel(HttpKernelInterface $httpKernel)
    {
        $this->httpKernel = $httpKernel;
    }
}

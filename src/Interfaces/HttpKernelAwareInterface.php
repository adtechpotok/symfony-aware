<?php

namespace Adtechpotok\Aware\Interfaces;

use Symfony\Component\HttpKernel\HttpKernelInterface;

interface HttpKernelAwareInterface
{
    /**
     * @param HttpKernelInterface $httpKernel
     */
    public function setHttpKernel(HttpKernelInterface $httpKernel);
}

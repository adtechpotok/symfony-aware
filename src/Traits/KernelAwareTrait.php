<?php

namespace Adtechpotok\Aware\Traits;

use Symfony\Component\HttpKernel\KernelInterface;

trait KernelAwareTrait
{
    /**
     * @var KernelInterface
     */
    protected $kernel;

    /**
     * @required
     *
     * @param KernelInterface $kernel
     */
    public function setKernel(KernelInterface $kernel)
    {
        $this->kernel = $kernel;
    }
}

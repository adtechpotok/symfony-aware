<?php

namespace Adtechpotok\Aware\Interfaces;

use Symfony\Component\HttpKernel\KernelInterface;

interface KernelAwareInterface
{
    /**
     * @param KernelInterface $kernel
     */
    public function setKernel(KernelInterface $kernel);
}

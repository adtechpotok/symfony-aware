<?php

namespace Adtechpotok\Aware\Interfaces;

use Symfony\Component\HttpKernel\Config\FileLocator;

interface FileLocatorAwareInterface
{
    /**
     * @param FileLocator $fileLocator
     */
    public function setFileLocator(FileLocator $fileLocator);
}

<?php

namespace Adtechpotok\Aware\Traits;

use Symfony\Component\HttpKernel\Config\FileLocator;

trait FileLocatorAwareTrait
{
    /**
     * @var FileLocator
     */
    protected $fileLocator;

    /**
     * @required
     *
     * @param FileLocator $fileLocator
     */
    public function setFileLocator(FileLocator $fileLocator)
    {
        $this->fileLocator = $fileLocator;
    }
}

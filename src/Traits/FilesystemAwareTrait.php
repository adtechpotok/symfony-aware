<?php

namespace Adtechpotok\Aware\Traits;

use Symfony\Component\Filesystem\Filesystem;

trait FilesystemAwareTrait
{
    /**
     * @var Filesystem
     */
    protected $filesystem;

    /**
     * @required
     *
     * @param Filesystem $filesystem
     */
    public function setFilesystem(Filesystem $filesystem)
    {
        $this->filesystem = $filesystem;
    }
}

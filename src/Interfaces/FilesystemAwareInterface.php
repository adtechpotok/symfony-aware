<?php

namespace Adtechpotok\Aware\Interfaces;

use Symfony\Component\Filesystem\Filesystem;

interface FilesystemAwareInterface
{
    /**
     * @param Filesystem $filesystem
     */
    public function setFilesystem(Filesystem $filesystem);
}

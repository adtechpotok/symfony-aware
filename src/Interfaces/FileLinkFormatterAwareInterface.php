<?php

namespace Adtechpotok\Aware\Interfaces;

use Symfony\Component\HttpKernel\Debug\FileLinkFormatter;

interface FileLinkFormatterAwareInterface
{
    /**
     * @param FileLinkFormatter $fileLinkFormatter
     */
    public function setFileLinkFormatter(FileLinkFormatter $fileLinkFormatter);
}

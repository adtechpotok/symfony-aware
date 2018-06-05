<?php

namespace Adtechpotok\Aware\Traits;

use Symfony\Component\HttpKernel\Debug\FileLinkFormatter;

trait FileLinkFormatterAwareTrait
{
    /**
     * @var FileLinkFormatter
     */
    protected $fileLinkFormatter;

    /**
     * @required
     *
     * @param FileLinkFormatter $fileLinkFormatter
     */
    public function setFileLinkFormatter(FileLinkFormatter $fileLinkFormatter)
    {
        $this->fileLinkFormatter = $fileLinkFormatter;
    }
}

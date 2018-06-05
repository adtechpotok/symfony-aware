<?php

namespace Adtechpotok\Aware\Interfaces;

use Doctrine\Common\Annotations\Reader;

interface ReaderAwareInterface
{
    /**
     * @param Reader $reader
     */
    public function setReader(Reader $reader);
}

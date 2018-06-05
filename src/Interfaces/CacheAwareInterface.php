<?php

namespace Adtechpotok\Aware\Interfaces;

use Psr\Cache\CacheItemPoolInterface;

interface CacheAwareInterface
{
    /**
     * @param CacheItemPoolInterface $cache
     */
    public function setCache(CacheItemPoolInterface $cache);
}

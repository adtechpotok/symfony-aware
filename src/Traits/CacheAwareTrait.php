<?php

namespace Adtechpotok\Aware\Traits;

use Psr\Cache\CacheItemPoolInterface;

trait CacheAwareTrait
{
    /**
     * @var CacheItemPoolInterface
     */
    protected $cache;

    /**
     * @required
     *
     * @param CacheItemPoolInterface $cache
     */
    public function setCache(CacheItemPoolInterface $cache)
    {
        $this->cache = $cache;
    }
}

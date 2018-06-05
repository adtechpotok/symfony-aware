<?php

namespace Adtechpotok\Aware\Traits;

use Symfony\Component\Routing\RouterInterface;

trait RouterAwareTrait
{
    /**
     * @var RouterInterface
     */
    protected $router;

    /**
     * @required
     *
     * @param RouterInterface $router
     */
    public function setRouter(RouterInterface $router)
    {
        $this->router = $router;
    }
}

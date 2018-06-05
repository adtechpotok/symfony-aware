<?php

namespace Adtechpotok\Aware\Interfaces;

use Symfony\Component\Routing\RouterInterface;

interface RouterAwareInterface
{
    /**
     * @param RouterInterface $router
     */
    public function setRouter(RouterInterface $router);
}

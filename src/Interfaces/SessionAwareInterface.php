<?php

namespace Adtechpotok\Aware\Interfaces;

use Symfony\Component\HttpFoundation\Session\SessionInterface;

interface SessionAwareInterface
{
    /**
     * @param SessionInterface $session
     */
    public function setSession(SessionInterface $session);
}

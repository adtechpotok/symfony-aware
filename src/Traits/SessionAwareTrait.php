<?php

namespace Adtechpotok\Aware\Traits;

use Symfony\Component\HttpFoundation\Session\SessionInterface;

trait SessionAwareTrait
{
    /**
     * @var SessionInterface
     */
    protected $session;

    /**
     * @required
     *
     * @param SessionInterface $session
     */
    public function setSession(SessionInterface $session)
    {
        $this->session = $session;
    }
}

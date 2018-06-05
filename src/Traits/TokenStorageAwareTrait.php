<?php

namespace Adtechpotok\Aware\Traits;

use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;

trait TokenStorageAwareTrait
{
    /**
     * @var TokenStorageInterface|null
     */
    protected $tokenStorage;

    /**
     * @required
     *
     * @param TokenStorageInterface|null $tokenStorage
     */
    public function setTokenStorage(TokenStorageInterface $tokenStorage = null)
    {
        $this->tokenStorage = $tokenStorage;
    }
}

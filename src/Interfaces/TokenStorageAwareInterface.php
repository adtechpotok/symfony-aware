<?php

namespace Adtechpotok\Aware\Interfaces;

use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;

interface TokenStorageAwareInterface
{
    /**
     * @param TokenStorageInterface|null $tokenStorage
     */
    public function setTokenStorage(TokenStorageInterface $tokenStorage = null);
}

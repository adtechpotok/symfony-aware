<?php

namespace Adtechpotok\Aware\Interfaces;

use Doctrine\Common\Persistence\ManagerRegistry;

interface DoctrineAwareInterface
{
    /**
     * @param ManagerRegistry $doctrine
     */
    public function setDoctrine(ManagerRegistry $doctrine);
}

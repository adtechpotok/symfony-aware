<?php

namespace Adtechpotok\Aware\Traits;

use Doctrine\Common\Persistence\ManagerRegistry;

trait DoctrineAwareTrait
{
    /**
     * @var ManagerRegistry
     */
    protected $doctrine;

    /**
     * @required
     *
     * @param ManagerRegistry $doctrine
     */
    public function setDoctrine(ManagerRegistry $doctrine)
    {
        $this->doctrine = $doctrine;
    }
}

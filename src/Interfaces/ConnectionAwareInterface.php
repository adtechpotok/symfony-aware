<?php

namespace Adtechpotok\Aware\Interfaces;

use Doctrine\DBAL\Driver\Connection;

interface ConnectionAwareInterface
{
    /**
     * @param Connection $connection
     */
    public function setConnection(Connection $connection);
}

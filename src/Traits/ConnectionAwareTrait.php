<?php

namespace Adtechpotok\Aware\Traits;

use Doctrine\DBAL\Driver\Connection;

trait ConnectionAwareTrait
{
    /**
     * @var Connection
     */
    protected $connection;

    /**
     * @required
     *
     * @param Connection $connection
     */
    public function setConnection(Connection $connection)
    {
        $this->connection = $connection;
    }
}

<?php

namespace Adtechpotok\Aware\Traits;

use Symfony\Component\Messenger\MessageBusInterface;

trait MessageBusAwareTrait
{
    /**
     * @var MessageBusInterface
     */
    protected $bus;

    /**
     * @required
     *
     * @param MessageBusInterface $bus
     */
    public function setMessageBus(MessageBusInterface $bus)
    {
        $this->bus = $bus;
    }
}

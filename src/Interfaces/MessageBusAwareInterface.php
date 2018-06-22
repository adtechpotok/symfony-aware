<?php

namespace Adtechpotok\Aware\Interfaces;

use Symfony\Component\Messenger\MessageBusInterface;

interface MessageBusAwareInterface
{
    /**
     * @param MessageBusInterface $bus
     */
    public function setMessageBus(MessageBusInterface $bus);
}

<?php

namespace Adtechpotok\Aware\Interfaces;

use Symfony\Component\Stopwatch\Stopwatch;

interface StopwatchAwareInterface
{
    /**
     * @param Stopwatch $stopwatch
     */
    public function setStopwatch(Stopwatch $stopwatch);
}

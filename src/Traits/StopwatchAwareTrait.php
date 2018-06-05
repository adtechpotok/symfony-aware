<?php

namespace Adtechpotok\Aware\Traits;

use Symfony\Component\Stopwatch\Stopwatch;

trait StopwatchAwareTrait
{
    /**
     * @var Stopwatch
     */
    protected $stopwatch;

    /**
     * @required
     *
     * @param Stopwatch $stopwatch
     */
    public function setStopwatch(Stopwatch $stopwatch)
    {
        $this->stopwatch = $stopwatch;
    }
}

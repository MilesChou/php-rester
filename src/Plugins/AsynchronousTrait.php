<?php

namespace Corp104\Rester\Plugins;

use Corp104\Rester\SynchronousAwareTrait;

/**
 * AsynchronousTrait
 */
trait AsynchronousTrait
{
    use SynchronousAwareTrait;

    protected $synchronous = false;
}

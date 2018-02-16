<?php

namespace Corp104\Rester\Support;

/**
 * Synchronous aware interface
 */
interface SynchronousAwareInterface
{
    /**
     * @return bool|null
     */
    public function getSynchronous();

    /**
     * @param bool|null $synchronous
     */
    public function setSynchronous($synchronous);
}
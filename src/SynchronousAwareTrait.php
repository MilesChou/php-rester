<?php

namespace Corp104\Rester;

/**
 * SynchronousAwareTrait
 */
trait SynchronousAwareTrait
{
    /**
     * @return bool|null
     */
    public function isAsynchronous()
    {
        if (null === $this->synchronous) {
            return null;
        }

        return !$this->synchronous;
    }

    /**
     * @return bool|null
     */
    public function isSynchronous()
    {
        if (null === $this->synchronous) {
            return null;
        }

        return $this->synchronous;
    }

    /**
     * @return static
     */
    public function asynchronous()
    {
        return $this->setSynchronous(false);
    }

    /**
     * @param bool|null $synchronous
     * @return static
     */
    public function setSynchronous($synchronous)
    {
        $this->synchronous = $synchronous;
        return $this;
    }

    /**
     * @return static
     */
    public function synchronous()
    {
        return $this->setSynchronous(true);
    }
}

<?php

namespace Corp104\Rester;

use Corp104\Rester\Exceptions;

/**
 * Api Collection Aware Trait
 */
trait CollectionAwareTrait
{
    /**
     * @var Collection
     */
    protected $collection;

    /**
     * @param string $name
     * @return bool
     */
    public function hasCollection(string $name): bool
    {
        return $this->collection->has($name);
    }

    /**
     * @param string $name
     * @return ResterClientInterface
     * @throws Exceptions\CollectionNotFoundException
     */
    public function getCollection(string $name): ResterClientInterface
    {
        return $this->collection->get($name);
    }

    /**
     * @param array $mapping
     */
    public function provisionCollection(array $mapping)
    {
        $this->setCollection(new Collection($mapping));
    }

    /**
     * Sets the Collection.
     *
     * @param Collection $collection
     */
    public function setCollection(Collection $collection)
    {
        $this->collection = $collection;
    }
}

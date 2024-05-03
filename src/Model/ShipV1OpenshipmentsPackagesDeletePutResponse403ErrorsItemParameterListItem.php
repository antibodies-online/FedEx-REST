<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace AntibodiesOnline\FedEx\Model;

class ShipV1OpenshipmentsPackagesDeletePutResponse403ErrorsItemParameterListItem extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * Identifies the error option to be applied.
     *
     * @var string
     */
    protected $value;
    /**
     * Indicates the value associated with the key.
     *
     * @var string
     */
    protected $key;

    /**
     * Identifies the error option to be applied.
     */
    public function getValue(): string
    {
        return $this->value;
    }

    /**
     * Identifies the error option to be applied.
     */
    public function setValue(string $value): self
    {
        $this->initialized['value'] = true;
        $this->value = $value;

        return $this;
    }

    /**
     * Indicates the value associated with the key.
     */
    public function getKey(): string
    {
        return $this->key;
    }

    /**
     * Indicates the value associated with the key.
     */
    public function setKey(string $key): self
    {
        $this->initialized['key'] = true;
        $this->key = $key;

        return $this;
    }
}

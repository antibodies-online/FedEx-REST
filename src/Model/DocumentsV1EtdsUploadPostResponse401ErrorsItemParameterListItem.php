<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace AntibodiesOnline\FedEx\Model;

class DocumentsV1EtdsUploadPostResponse401ErrorsItemParameterListItem extends \ArrayObject
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
     * This is a parameter value. Example: PRIORITY_OVERNIGHT.
     *
     * @var string
     */
    protected $value;
    /**
     * This is a parameter key.
     *
     * @var string
     */
    protected $key;

    /**
     * This is a parameter value. Example: PRIORITY_OVERNIGHT.
     */
    public function getValue(): string
    {
        return $this->value;
    }

    /**
     * This is a parameter value. Example: PRIORITY_OVERNIGHT.
     */
    public function setValue(string $value): self
    {
        $this->initialized['value'] = true;
        $this->value = $value;

        return $this;
    }

    /**
     * This is a parameter key.
     */
    public function getKey(): string
    {
        return $this->key;
    }

    /**
     * This is a parameter key.
     */
    public function setKey(string $key): self
    {
        $this->initialized['key'] = true;
        $this->key = $key;

        return $this;
    }
}

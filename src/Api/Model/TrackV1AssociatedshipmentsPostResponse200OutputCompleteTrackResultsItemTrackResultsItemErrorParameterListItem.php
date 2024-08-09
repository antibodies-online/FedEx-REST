<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class TrackV1AssociatedshipmentsPostResponse200OutputCompleteTrackResultsItemTrackResultsItemErrorParameterListItem extends \ArrayObject
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
     * Identifies the error option to be applied. <br>Example: value
     *
     * @var string
     */
    protected $value;
    /**
     * Indicates the value associated with the key.<br> Example: key
     *
     * @var string
     */
    protected $key;
    /**
     * Identifies the error option to be applied. <br>Example: value
     *
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }
    /**
     * Identifies the error option to be applied. <br>Example: value
     *
     * @param string $value
     *
     * @return self
     */
    public function setValue(string $value): self
    {
        $this->initialized['value'] = true;
        $this->value = $value;
        return $this;
    }
    /**
     * Indicates the value associated with the key.<br> Example: key
     *
     * @return string
     */
    public function getKey(): string
    {
        return $this->key;
    }
    /**
     * Indicates the value associated with the key.<br> Example: key
     *
     * @param string $key
     *
     * @return self
     */
    public function setKey(string $key): self
    {
        $this->initialized['key'] = true;
        $this->key = $key;
        return $this;
    }
}
<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class DocumentsV1EtdsMultiuploadPostResponse400ErrorsItemParameterListItem extends \ArrayObject
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
     * This is a parameter key.
     *
     * @var string
     */
    protected $key;
    /**
     * This is a parameter value. Example: carrierCode
     *
     * @var string
     */
    protected $value;
    /**
     * This is a parameter key.
     *
     * @return string
     */
    public function getKey(): string
    {
        return $this->key;
    }
    /**
     * This is a parameter key.
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
    /**
     * This is a parameter value. Example: carrierCode
     *
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }
    /**
     * This is a parameter value. Example: carrierCode
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
}
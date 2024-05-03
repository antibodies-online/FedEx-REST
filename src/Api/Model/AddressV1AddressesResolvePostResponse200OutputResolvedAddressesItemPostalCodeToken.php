<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class AddressV1AddressesResolvePostResponse200OutputResolvedAddressesItemPostalCodeToken extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * Indicates if it has changed from the input address.
     *
     * @var bool
     */
    protected $changed;
    /**
     * Indicates the changed value.<br> Example: SAN JUAN
     *
     * @var string
     */
    protected $value;
    /**
     * Indicates if it has changed from the input address.
     *
     * @return bool
     */
    public function getChanged() : bool
    {
        return $this->changed;
    }
    /**
     * Indicates if it has changed from the input address.
     *
     * @param bool $changed
     *
     * @return self
     */
    public function setChanged(bool $changed) : self
    {
        $this->initialized['changed'] = true;
        $this->changed = $changed;
        return $this;
    }
    /**
     * Indicates the changed value.<br> Example: SAN JUAN
     *
     * @return string
     */
    public function getValue() : string
    {
        return $this->value;
    }
    /**
     * Indicates the changed value.<br> Example: SAN JUAN
     *
     * @param string $value
     *
     * @return self
     */
    public function setValue(string $value) : self
    {
        $this->initialized['value'] = true;
        $this->value = $value;
        return $this;
    }
}
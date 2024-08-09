<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1ShipmentsTagCancelShipmentidPutBodyAccountNumber extends \ArrayObject
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
     * Conditional.<br> The account number value. Max Length is 9.<br>Example: 123456789
     *
     * @var string
     */
    protected $value;
    /**
     * Conditional.<br> The account number value. Max Length is 9.<br>Example: 123456789
     *
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }
    /**
     * Conditional.<br> The account number value. Max Length is 9.<br>Example: 123456789
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
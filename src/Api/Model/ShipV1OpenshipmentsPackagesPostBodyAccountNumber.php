<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1OpenshipmentsPackagesPostBodyAccountNumber extends \ArrayObject
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
     * The account number value.Value is required if the paymentType is RECIPIENT, THIRD_PARTY or COLLECT. <br>Example: Your account number
     *
     * @var string
     */
    protected $value;
    /**
     * The account number value.Value is required if the paymentType is RECIPIENT, THIRD_PARTY or COLLECT. <br>Example: Your account number
     *
     * @return string
     */
    public function getValue() : string
    {
        return $this->value;
    }
    /**
     * The account number value.Value is required if the paymentType is RECIPIENT, THIRD_PARTY or COLLECT. <br>Example: Your account number
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
<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentrecipientaccountNumber extends \ArrayObject
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
     * This is the account number. Max Length is 9. Example: Your account number
     *
     * @var string
     */
    protected $value;
    /**
     * This is the account number. Max Length is 9. Example: Your account number
     *
     * @return string
     */
    public function getValue() : string
    {
        return $this->value;
    }
    /**
     * This is the account number. Max Length is 9. Example: Your account number
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
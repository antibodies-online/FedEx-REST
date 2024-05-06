<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class AvailabilityV1TransittimesPostBodyRequestedShipmentShippingChargesPaymentPayorResponsiblePartyAccountNumber extends \ArrayObject
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
     * Conditionally required.<br>Account number is required for ACCOUNT based rates. Account number value max length is 9. <br> Example: 60xxxxxx2
     *
     * @var string
     */
    protected $value;
    /**
     * Conditionally required.<br>Account number is required for ACCOUNT based rates. Account number value max length is 9. <br> Example: 60xxxxxx2
     *
     * @return string
     */
    public function getValue() : string
    {
        return $this->value;
    }
    /**
     * Conditionally required.<br>Account number is required for ACCOUNT based rates. Account number value max length is 9. <br> Example: 60xxxxxx2
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
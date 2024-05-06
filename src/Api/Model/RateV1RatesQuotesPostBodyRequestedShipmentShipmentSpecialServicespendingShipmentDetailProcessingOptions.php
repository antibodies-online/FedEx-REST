<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicespendingShipmentDetailProcessingOptions extends \ArrayObject
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
     * These are Pending Shipment processing options.<br> Example: ["ALLOW_MODIFICATIONS"]
     *
     * @var list<string>
     */
    protected $options;
    /**
     * These are Pending Shipment processing options.<br> Example: ["ALLOW_MODIFICATIONS"]
     *
     * @return list<string>
     */
    public function getOptions() : array
    {
        return $this->options;
    }
    /**
     * These are Pending Shipment processing options.<br> Example: ["ALLOW_MODIFICATIONS"]
     *
     * @param list<string> $options
     *
     * @return self
     */
    public function setOptions(array $options) : self
    {
        $this->initialized['options'] = true;
        $this->options = $options;
        return $this;
    }
}
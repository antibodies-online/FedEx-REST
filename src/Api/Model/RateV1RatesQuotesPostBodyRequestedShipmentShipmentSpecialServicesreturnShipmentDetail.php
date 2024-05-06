<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class RateV1RatesQuotesPostBodyRequestedShipmentShipmentSpecialServicesreturnShipmentDetail extends \ArrayObject
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
     * The type of return shipment being requested. 
     *
     * @var string
     */
    protected $returnType;
    /**
     * The type of return shipment being requested. 
     *
     * @return string
     */
    public function getReturnType() : string
    {
        return $this->returnType;
    }
    /**
     * The type of return shipment being requested. 
     *
     * @param string $returnType
     *
     * @return self
     */
    public function setReturnType(string $returnType) : self
    {
        $this->initialized['returnType'] = true;
        $this->returnType = $returnType;
        return $this;
    }
}
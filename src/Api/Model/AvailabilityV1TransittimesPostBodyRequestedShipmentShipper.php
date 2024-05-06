<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class AvailabilityV1TransittimesPostBodyRequestedShipmentShipper extends \ArrayObject
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
     * 
     *
     * @var AvailabilityV1TransittimesPostBodyRequestedShipmentShipperAddress
     */
    protected $address;
    /**
     * 
     *
     * @return AvailabilityV1TransittimesPostBodyRequestedShipmentShipperAddress
     */
    public function getAddress() : AvailabilityV1TransittimesPostBodyRequestedShipmentShipperAddress
    {
        return $this->address;
    }
    /**
     * 
     *
     * @param AvailabilityV1TransittimesPostBodyRequestedShipmentShipperAddress $address
     *
     * @return self
     */
    public function setAddress(AvailabilityV1TransittimesPostBodyRequestedShipmentShipperAddress $address) : self
    {
        $this->initialized['address'] = true;
        $this->address = $address;
        return $this;
    }
}
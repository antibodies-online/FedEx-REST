<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentspecialServicesRequestedfreightDirectDetail extends \ArrayObject
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
     * This field provides the list of data for Fedex Direct Detail service.There can be maximum of two allowed values for this field.
     *
     * @var list<AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentspecialServicesRequestedfreightDirectDetailFreightDirectDataDetailsItem>
     */
    protected $freightDirectDataDetails;
    /**
     * This field provides the list of data for Fedex Direct Detail service.There can be maximum of two allowed values for this field.
     *
     * @return list<AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentspecialServicesRequestedfreightDirectDetailFreightDirectDataDetailsItem>
     */
    public function getFreightDirectDataDetails() : array
    {
        return $this->freightDirectDataDetails;
    }
    /**
     * This field provides the list of data for Fedex Direct Detail service.There can be maximum of two allowed values for this field.
     *
     * @param list<AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentspecialServicesRequestedfreightDirectDetailFreightDirectDataDetailsItem> $freightDirectDataDetails
     *
     * @return self
     */
    public function setFreightDirectDataDetails(array $freightDirectDataDetails) : self
    {
        $this->initialized['freightDirectDataDetails'] = true;
        $this->freightDirectDataDetails = $freightDirectDataDetails;
        return $this;
    }
}
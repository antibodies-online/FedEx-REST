<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentFreightShipmentSpecialServicesfreightDirectDetail extends \ArrayObject
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
     * This field provides the list of data for Fedex Direct Detail service.
     *
     * @var list<RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentFreightShipmentSpecialServicesfreightDirectDetailFreightDirectDataDetailsItem>
     */
    protected $freightDirectDataDetails;
    /**
     * This field provides the list of data for Fedex Direct Detail service.
     *
     * @return list<RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentFreightShipmentSpecialServicesfreightDirectDetailFreightDirectDataDetailsItem>
     */
    public function getFreightDirectDataDetails(): array
    {
        return $this->freightDirectDataDetails;
    }
    /**
     * This field provides the list of data for Fedex Direct Detail service.
     *
     * @param list<RateV1FreightRatesQuotesPostBodyFreightRequestedShipmentFreightShipmentSpecialServicesfreightDirectDetailFreightDirectDataDetailsItem> $freightDirectDataDetails
     *
     * @return self
     */
    public function setFreightDirectDataDetails(array $freightDirectDataDetails): self
    {
        $this->initialized['freightDirectDataDetails'] = true;
        $this->freightDirectDataDetails = $freightDirectDataDetails;
        return $this;
    }
}
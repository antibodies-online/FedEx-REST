<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class PickupV1FreightPickupsPostBodyFreightPickupDetaillineItemsItemShipmentSpecialServicesRequestedFreightDirectDetail extends \ArrayObject
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
     * 
     *
     * @var list<PickupV1FreightPickupsPostBodyFreightPickupDetaillineItemsItemShipmentSpecialServicesRequestedFreightDirectDetailFreightDirectDataDetailsItem>
     */
    protected $freightDirectDataDetails;
    /**
     * 
     *
     * @return list<PickupV1FreightPickupsPostBodyFreightPickupDetaillineItemsItemShipmentSpecialServicesRequestedFreightDirectDetailFreightDirectDataDetailsItem>
     */
    public function getFreightDirectDataDetails(): array
    {
        return $this->freightDirectDataDetails;
    }
    /**
     * 
     *
     * @param list<PickupV1FreightPickupsPostBodyFreightPickupDetaillineItemsItemShipmentSpecialServicesRequestedFreightDirectDetailFreightDirectDataDetailsItem> $freightDirectDataDetails
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
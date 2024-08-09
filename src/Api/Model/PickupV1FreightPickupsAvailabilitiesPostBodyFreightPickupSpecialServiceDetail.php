<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class PickupV1FreightPickupsAvailabilitiesPostBodyFreightPickupSpecialServiceDetail extends \ArrayObject
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
     * The shipment details, such as service type, packaging type, weight.
     *
     * @var array<string, mixed>
     */
    protected $shipmentSpecialServicesRequested;
    /**
     * The shipment details, such as service type, packaging type, weight.
     *
     * @return array<string, mixed>
     */
    public function getShipmentSpecialServicesRequested(): iterable
    {
        return $this->shipmentSpecialServicesRequested;
    }
    /**
     * The shipment details, such as service type, packaging type, weight.
     *
     * @param array<string, mixed> $shipmentSpecialServicesRequested
     *
     * @return self
     */
    public function setShipmentSpecialServicesRequested(iterable $shipmentSpecialServicesRequested): self
    {
        $this->initialized['shipmentSpecialServicesRequested'] = true;
        $this->shipmentSpecialServicesRequested = $shipmentSpecialServicesRequested;
        return $this;
    }
}
<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentspecialServicesRequestedsaturdayDeliveryDetail extends \ArrayObject
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
     * These are contact and address details for this special service.
     *
     * @var AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentspecialServicesRequestedsaturdayDeliveryDetailLocationContactAndAddress
     */
    protected $locationContactAndAddress;
    /**
     * These are contact and address details for this special service.
     *
     * @return AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentspecialServicesRequestedsaturdayDeliveryDetailLocationContactAndAddress
     */
    public function getLocationContactAndAddress(): AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentspecialServicesRequestedsaturdayDeliveryDetailLocationContactAndAddress
    {
        return $this->locationContactAndAddress;
    }
    /**
     * These are contact and address details for this special service.
     *
     * @param AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentspecialServicesRequestedsaturdayDeliveryDetailLocationContactAndAddress $locationContactAndAddress
     *
     * @return self
     */
    public function setLocationContactAndAddress(AvailabilityV1SpecialserviceoptionsPostBodyRequestedShipmentspecialServicesRequestedsaturdayDeliveryDetailLocationContactAndAddress $locationContactAndAddress): self
    {
        $this->initialized['locationContactAndAddress'] = true;
        $this->locationContactAndAddress = $locationContactAndAddress;
        return $this;
    }
}
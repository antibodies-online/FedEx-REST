<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1FreightShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedHoldAtLocationDetailHoldingLocation extends \ArrayObject
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
     * Descriptive data for a physical location. May be used as an actual physical address (place to which one could go), or as a container of "address parts" which should be handled as a unit (such as a city-state-ZIP combination within the US).
     *
     * @var ShipV1FreightShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedHoldAtLocationDetailHoldingLocationaddress
     */
    protected $address;
    /**
     * Specify the contact information.
     *
     * @var ShipV1FreightShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedHoldAtLocationDetailHoldingLocationcontact
     */
    protected $contact;
    /**
     * Descriptive data for a physical location. May be used as an actual physical address (place to which one could go), or as a container of "address parts" which should be handled as a unit (such as a city-state-ZIP combination within the US).
     *
     * @return ShipV1FreightShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedHoldAtLocationDetailHoldingLocationaddress
     */
    public function getAddress(): ShipV1FreightShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedHoldAtLocationDetailHoldingLocationaddress
    {
        return $this->address;
    }
    /**
     * Descriptive data for a physical location. May be used as an actual physical address (place to which one could go), or as a container of "address parts" which should be handled as a unit (such as a city-state-ZIP combination within the US).
     *
     * @param ShipV1FreightShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedHoldAtLocationDetailHoldingLocationaddress $address
     *
     * @return self
     */
    public function setAddress(ShipV1FreightShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedHoldAtLocationDetailHoldingLocationaddress $address): self
    {
        $this->initialized['address'] = true;
        $this->address = $address;
        return $this;
    }
    /**
     * Specify the contact information.
     *
     * @return ShipV1FreightShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedHoldAtLocationDetailHoldingLocationcontact
     */
    public function getContact(): ShipV1FreightShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedHoldAtLocationDetailHoldingLocationcontact
    {
        return $this->contact;
    }
    /**
     * Specify the contact information.
     *
     * @param ShipV1FreightShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedHoldAtLocationDetailHoldingLocationcontact $contact
     *
     * @return self
     */
    public function setContact(ShipV1FreightShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedHoldAtLocationDetailHoldingLocationcontact $contact): self
    {
        $this->initialized['contact'] = true;
        $this->contact = $contact;
        return $this;
    }
}
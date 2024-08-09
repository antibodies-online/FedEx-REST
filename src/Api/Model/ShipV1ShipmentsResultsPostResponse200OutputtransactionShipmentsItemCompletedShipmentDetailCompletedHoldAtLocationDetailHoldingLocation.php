<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1ShipmentsResultsPostResponse200OutputtransactionShipmentsItemCompletedShipmentDetailCompletedHoldAtLocationDetailHoldingLocation extends \ArrayObject
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
     * @var ShipV1ShipmentsResultsPostResponse200OutputtransactionShipmentsItemCompletedShipmentDetailCompletedHoldAtLocationDetailHoldingLocationaddress
     */
    protected $address;
    /**
     * Specify the contact information.
     *
     * @var ShipV1ShipmentsResultsPostResponse200OutputtransactionShipmentsItemCompletedShipmentDetailCompletedHoldAtLocationDetailHoldingLocationcontact
     */
    protected $contact;
    /**
     * Descriptive data for a physical location. May be used as an actual physical address (place to which one could go), or as a container of "address parts" which should be handled as a unit (such as a city-state-ZIP combination within the US).
     *
     * @return ShipV1ShipmentsResultsPostResponse200OutputtransactionShipmentsItemCompletedShipmentDetailCompletedHoldAtLocationDetailHoldingLocationaddress
     */
    public function getAddress(): ShipV1ShipmentsResultsPostResponse200OutputtransactionShipmentsItemCompletedShipmentDetailCompletedHoldAtLocationDetailHoldingLocationaddress
    {
        return $this->address;
    }
    /**
     * Descriptive data for a physical location. May be used as an actual physical address (place to which one could go), or as a container of "address parts" which should be handled as a unit (such as a city-state-ZIP combination within the US).
     *
     * @param ShipV1ShipmentsResultsPostResponse200OutputtransactionShipmentsItemCompletedShipmentDetailCompletedHoldAtLocationDetailHoldingLocationaddress $address
     *
     * @return self
     */
    public function setAddress(ShipV1ShipmentsResultsPostResponse200OutputtransactionShipmentsItemCompletedShipmentDetailCompletedHoldAtLocationDetailHoldingLocationaddress $address): self
    {
        $this->initialized['address'] = true;
        $this->address = $address;
        return $this;
    }
    /**
     * Specify the contact information.
     *
     * @return ShipV1ShipmentsResultsPostResponse200OutputtransactionShipmentsItemCompletedShipmentDetailCompletedHoldAtLocationDetailHoldingLocationcontact
     */
    public function getContact(): ShipV1ShipmentsResultsPostResponse200OutputtransactionShipmentsItemCompletedShipmentDetailCompletedHoldAtLocationDetailHoldingLocationcontact
    {
        return $this->contact;
    }
    /**
     * Specify the contact information.
     *
     * @param ShipV1ShipmentsResultsPostResponse200OutputtransactionShipmentsItemCompletedShipmentDetailCompletedHoldAtLocationDetailHoldingLocationcontact $contact
     *
     * @return self
     */
    public function setContact(ShipV1ShipmentsResultsPostResponse200OutputtransactionShipmentsItemCompletedShipmentDetailCompletedHoldAtLocationDetailHoldingLocationcontact $contact): self
    {
        $this->initialized['contact'] = true;
        $this->contact = $contact;
        return $this;
    }
}
<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentLabelSpecificationPrintedLabelOrigin extends \ArrayObject
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
     * Indicate the contact details of the shipper.
     *
     * @var ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentLabelSpecificationPrintedLabelOrigincontact
     */
    protected $contact;
    /**
     * This is detailed information on physical location. May be used as an actual physical address (place to which one could go), or as a container of address parts which should be handled as a unit (such as a city-state-ZIP combination within the U.S.).
     *
     * @var ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentLabelSpecificationPrintedLabelOriginaddress
     */
    protected $address;
    /**
     * Indicate the contact details of the shipper.
     *
     * @return ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentLabelSpecificationPrintedLabelOrigincontact
     */
    public function getContact() : ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentLabelSpecificationPrintedLabelOrigincontact
    {
        return $this->contact;
    }
    /**
     * Indicate the contact details of the shipper.
     *
     * @param ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentLabelSpecificationPrintedLabelOrigincontact $contact
     *
     * @return self
     */
    public function setContact(ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentLabelSpecificationPrintedLabelOrigincontact $contact) : self
    {
        $this->initialized['contact'] = true;
        $this->contact = $contact;
        return $this;
    }
    /**
     * This is detailed information on physical location. May be used as an actual physical address (place to which one could go), or as a container of address parts which should be handled as a unit (such as a city-state-ZIP combination within the U.S.).
     *
     * @return ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentLabelSpecificationPrintedLabelOriginaddress
     */
    public function getAddress() : ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentLabelSpecificationPrintedLabelOriginaddress
    {
        return $this->address;
    }
    /**
     * This is detailed information on physical location. May be used as an actual physical address (place to which one could go), or as a container of address parts which should be handled as a unit (such as a city-state-ZIP combination within the U.S.).
     *
     * @param ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentLabelSpecificationPrintedLabelOriginaddress $address
     *
     * @return self
     */
    public function setAddress(ShipV1OpenshipmentsRetrievePostResponse200OutputRequestedShipmentLabelSpecificationPrintedLabelOriginaddress $address) : self
    {
        $this->initialized['address'] = true;
        $this->address = $address;
        return $this;
    }
}
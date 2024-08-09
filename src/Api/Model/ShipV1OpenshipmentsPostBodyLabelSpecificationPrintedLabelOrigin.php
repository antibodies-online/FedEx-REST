<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1OpenshipmentsPostBodyLabelSpecificationPrintedLabelOrigin extends \ArrayObject
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
     * Indicate the contact details of the shipper.
     *
     * @var ShipV1OpenshipmentsPostBodyLabelSpecificationPrintedLabelOrigincontact
     */
    protected $contact;
    /**
     * This is detailed information on physical location. May be used as an actual physical address (place to which one could go), or as a container of address parts which should be handled as a unit (such as a city-state-ZIP combination within the U.S.).
     *
     * @var ShipV1OpenshipmentsPostBodyLabelSpecificationPrintedLabelOriginaddress
     */
    protected $address;
    /**
     * Indicate the contact details of the shipper.
     *
     * @return ShipV1OpenshipmentsPostBodyLabelSpecificationPrintedLabelOrigincontact
     */
    public function getContact(): ShipV1OpenshipmentsPostBodyLabelSpecificationPrintedLabelOrigincontact
    {
        return $this->contact;
    }
    /**
     * Indicate the contact details of the shipper.
     *
     * @param ShipV1OpenshipmentsPostBodyLabelSpecificationPrintedLabelOrigincontact $contact
     *
     * @return self
     */
    public function setContact(ShipV1OpenshipmentsPostBodyLabelSpecificationPrintedLabelOrigincontact $contact): self
    {
        $this->initialized['contact'] = true;
        $this->contact = $contact;
        return $this;
    }
    /**
     * This is detailed information on physical location. May be used as an actual physical address (place to which one could go), or as a container of address parts which should be handled as a unit (such as a city-state-ZIP combination within the U.S.).
     *
     * @return ShipV1OpenshipmentsPostBodyLabelSpecificationPrintedLabelOriginaddress
     */
    public function getAddress(): ShipV1OpenshipmentsPostBodyLabelSpecificationPrintedLabelOriginaddress
    {
        return $this->address;
    }
    /**
     * This is detailed information on physical location. May be used as an actual physical address (place to which one could go), or as a container of address parts which should be handled as a unit (such as a city-state-ZIP combination within the U.S.).
     *
     * @param ShipV1OpenshipmentsPostBodyLabelSpecificationPrintedLabelOriginaddress $address
     *
     * @return self
     */
    public function setAddress(ShipV1OpenshipmentsPostBodyLabelSpecificationPrintedLabelOriginaddress $address): self
    {
        $this->initialized['address'] = true;
        $this->address = $address;
        return $this;
    }
}
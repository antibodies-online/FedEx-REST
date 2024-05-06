<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1ShipmentsPostBodyRequestedShipmentShipper extends \ArrayObject
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
     * This is detailed information on physical location. May be used as an actual physical address (place to which one could go), or as a container of address parts which should be handled as a unit (such as a city-state-ZIP combination within the US).
     *
     * @var ShipV1ShipmentsPostBodyRequestedShipmentShipperaddress
     */
    protected $address;
    /**
     * Indicate the contact details for this shipment.
     *
     * @var ShipV1ShipmentsPostBodyRequestedShipmentShippercontact
     */
    protected $contact;
    /**
     * This is the tax identification number details.
     *
     * @var list<ShipV1ShipmentsPostBodyRequestedShipmentShippertinsItem>
     */
    protected $tins;
    /**
     * This is detailed information on physical location. May be used as an actual physical address (place to which one could go), or as a container of address parts which should be handled as a unit (such as a city-state-ZIP combination within the US).
     *
     * @return ShipV1ShipmentsPostBodyRequestedShipmentShipperaddress
     */
    public function getAddress() : ShipV1ShipmentsPostBodyRequestedShipmentShipperaddress
    {
        return $this->address;
    }
    /**
     * This is detailed information on physical location. May be used as an actual physical address (place to which one could go), or as a container of address parts which should be handled as a unit (such as a city-state-ZIP combination within the US).
     *
     * @param ShipV1ShipmentsPostBodyRequestedShipmentShipperaddress $address
     *
     * @return self
     */
    public function setAddress(ShipV1ShipmentsPostBodyRequestedShipmentShipperaddress $address) : self
    {
        $this->initialized['address'] = true;
        $this->address = $address;
        return $this;
    }
    /**
     * Indicate the contact details for this shipment.
     *
     * @return ShipV1ShipmentsPostBodyRequestedShipmentShippercontact
     */
    public function getContact() : ShipV1ShipmentsPostBodyRequestedShipmentShippercontact
    {
        return $this->contact;
    }
    /**
     * Indicate the contact details for this shipment.
     *
     * @param ShipV1ShipmentsPostBodyRequestedShipmentShippercontact $contact
     *
     * @return self
     */
    public function setContact(ShipV1ShipmentsPostBodyRequestedShipmentShippercontact $contact) : self
    {
        $this->initialized['contact'] = true;
        $this->contact = $contact;
        return $this;
    }
    /**
     * This is the tax identification number details.
     *
     * @return list<ShipV1ShipmentsPostBodyRequestedShipmentShippertinsItem>
     */
    public function getTins() : array
    {
        return $this->tins;
    }
    /**
     * This is the tax identification number details.
     *
     * @param list<ShipV1ShipmentsPostBodyRequestedShipmentShippertinsItem> $tins
     *
     * @return self
     */
    public function setTins(array $tins) : self
    {
        $this->initialized['tins'] = true;
        $this->tins = $tins;
        return $this;
    }
}
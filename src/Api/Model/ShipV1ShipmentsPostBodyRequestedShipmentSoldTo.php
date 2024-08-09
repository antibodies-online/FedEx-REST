<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1ShipmentsPostBodyRequestedShipmentSoldTo extends \ArrayObject
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
     * This is detailed information on physical location. May be used as an actual physical address (place to which one could go), or as a container of address parts which should be handled as a unit (such as a city-state-ZIP combination within the US).
     *
     * @var ShipV1ShipmentsPostBodyRequestedShipmentSoldToaddress
     */
    protected $address;
    /**
     * Indicate the contact details for this shipment.
     *
     * @var ShipV1ShipmentsPostBodyRequestedShipmentSoldTocontact
     */
    protected $contact;
    /**
     * Used for adding the tax id
     *
     * @var list<ShipV1ShipmentsPostBodyRequestedShipmentSoldTotinsItem>
     */
    protected $tins;
    /**
     * This is FedEx Account number details.
     *
     * @var ShipV1ShipmentsPostBodyRequestedShipmentSoldToaccountNumber
     */
    protected $accountNumber;
    /**
     * This is detailed information on physical location. May be used as an actual physical address (place to which one could go), or as a container of address parts which should be handled as a unit (such as a city-state-ZIP combination within the US).
     *
     * @return ShipV1ShipmentsPostBodyRequestedShipmentSoldToaddress
     */
    public function getAddress(): ShipV1ShipmentsPostBodyRequestedShipmentSoldToaddress
    {
        return $this->address;
    }
    /**
     * This is detailed information on physical location. May be used as an actual physical address (place to which one could go), or as a container of address parts which should be handled as a unit (such as a city-state-ZIP combination within the US).
     *
     * @param ShipV1ShipmentsPostBodyRequestedShipmentSoldToaddress $address
     *
     * @return self
     */
    public function setAddress(ShipV1ShipmentsPostBodyRequestedShipmentSoldToaddress $address): self
    {
        $this->initialized['address'] = true;
        $this->address = $address;
        return $this;
    }
    /**
     * Indicate the contact details for this shipment.
     *
     * @return ShipV1ShipmentsPostBodyRequestedShipmentSoldTocontact
     */
    public function getContact(): ShipV1ShipmentsPostBodyRequestedShipmentSoldTocontact
    {
        return $this->contact;
    }
    /**
     * Indicate the contact details for this shipment.
     *
     * @param ShipV1ShipmentsPostBodyRequestedShipmentSoldTocontact $contact
     *
     * @return self
     */
    public function setContact(ShipV1ShipmentsPostBodyRequestedShipmentSoldTocontact $contact): self
    {
        $this->initialized['contact'] = true;
        $this->contact = $contact;
        return $this;
    }
    /**
     * Used for adding the tax id
     *
     * @return list<ShipV1ShipmentsPostBodyRequestedShipmentSoldTotinsItem>
     */
    public function getTins(): array
    {
        return $this->tins;
    }
    /**
     * Used for adding the tax id
     *
     * @param list<ShipV1ShipmentsPostBodyRequestedShipmentSoldTotinsItem> $tins
     *
     * @return self
     */
    public function setTins(array $tins): self
    {
        $this->initialized['tins'] = true;
        $this->tins = $tins;
        return $this;
    }
    /**
     * This is FedEx Account number details.
     *
     * @return ShipV1ShipmentsPostBodyRequestedShipmentSoldToaccountNumber
     */
    public function getAccountNumber(): ShipV1ShipmentsPostBodyRequestedShipmentSoldToaccountNumber
    {
        return $this->accountNumber;
    }
    /**
     * This is FedEx Account number details.
     *
     * @param ShipV1ShipmentsPostBodyRequestedShipmentSoldToaccountNumber $accountNumber
     *
     * @return self
     */
    public function setAccountNumber(ShipV1ShipmentsPostBodyRequestedShipmentSoldToaccountNumber $accountNumber): self
    {
        $this->initialized['accountNumber'] = true;
        $this->accountNumber = $accountNumber;
        return $this;
    }
}
<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1OpenshipmentsPutBodyRequestedShipmentSoldTo extends \ArrayObject
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
     * @var ShipV1OpenshipmentsPutBodyRequestedShipmentSoldToaddress
     */
    protected $address;
    /**
     * Indicate the contact details for this shipment.
     *
     * @var ShipV1OpenshipmentsPutBodyRequestedShipmentSoldTocontact
     */
    protected $contact;
    /**
     * Used for adding the tax id
     *
     * @var list<ShipV1OpenshipmentsPutBodyRequestedShipmentSoldTotinsItem>
     */
    protected $tins;
    /**
     * The account number associated with the shipment. <br>Example: Your account number
     *
     * @var ShipV1OpenshipmentsPutBodyRequestedShipmentSoldToaccountNumber
     */
    protected $accountNumber;
    /**
     * This is detailed information on physical location. May be used as an actual physical address (place to which one could go), or as a container of address parts which should be handled as a unit (such as a city-state-ZIP combination within the US).
     *
     * @return ShipV1OpenshipmentsPutBodyRequestedShipmentSoldToaddress
     */
    public function getAddress() : ShipV1OpenshipmentsPutBodyRequestedShipmentSoldToaddress
    {
        return $this->address;
    }
    /**
     * This is detailed information on physical location. May be used as an actual physical address (place to which one could go), or as a container of address parts which should be handled as a unit (such as a city-state-ZIP combination within the US).
     *
     * @param ShipV1OpenshipmentsPutBodyRequestedShipmentSoldToaddress $address
     *
     * @return self
     */
    public function setAddress(ShipV1OpenshipmentsPutBodyRequestedShipmentSoldToaddress $address) : self
    {
        $this->initialized['address'] = true;
        $this->address = $address;
        return $this;
    }
    /**
     * Indicate the contact details for this shipment.
     *
     * @return ShipV1OpenshipmentsPutBodyRequestedShipmentSoldTocontact
     */
    public function getContact() : ShipV1OpenshipmentsPutBodyRequestedShipmentSoldTocontact
    {
        return $this->contact;
    }
    /**
     * Indicate the contact details for this shipment.
     *
     * @param ShipV1OpenshipmentsPutBodyRequestedShipmentSoldTocontact $contact
     *
     * @return self
     */
    public function setContact(ShipV1OpenshipmentsPutBodyRequestedShipmentSoldTocontact $contact) : self
    {
        $this->initialized['contact'] = true;
        $this->contact = $contact;
        return $this;
    }
    /**
     * Used for adding the tax id
     *
     * @return list<ShipV1OpenshipmentsPutBodyRequestedShipmentSoldTotinsItem>
     */
    public function getTins() : array
    {
        return $this->tins;
    }
    /**
     * Used for adding the tax id
     *
     * @param list<ShipV1OpenshipmentsPutBodyRequestedShipmentSoldTotinsItem> $tins
     *
     * @return self
     */
    public function setTins(array $tins) : self
    {
        $this->initialized['tins'] = true;
        $this->tins = $tins;
        return $this;
    }
    /**
     * The account number associated with the shipment. <br>Example: Your account number
     *
     * @return ShipV1OpenshipmentsPutBodyRequestedShipmentSoldToaccountNumber
     */
    public function getAccountNumber() : ShipV1OpenshipmentsPutBodyRequestedShipmentSoldToaccountNumber
    {
        return $this->accountNumber;
    }
    /**
     * The account number associated with the shipment. <br>Example: Your account number
     *
     * @param ShipV1OpenshipmentsPutBodyRequestedShipmentSoldToaccountNumber $accountNumber
     *
     * @return self
     */
    public function setAccountNumber(ShipV1OpenshipmentsPutBodyRequestedShipmentSoldToaccountNumber $accountNumber) : self
    {
        $this->initialized['accountNumber'] = true;
        $this->accountNumber = $accountNumber;
        return $this;
    }
}
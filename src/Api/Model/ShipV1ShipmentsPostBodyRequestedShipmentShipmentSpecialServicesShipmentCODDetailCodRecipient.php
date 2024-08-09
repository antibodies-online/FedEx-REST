<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1ShipmentsPostBodyRequestedShipmentShipmentSpecialServicesShipmentCODDetailCodRecipient extends \ArrayObject
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
     * @var ShipV1ShipmentsPostBodyRequestedShipmentShipmentSpecialServicesShipmentCODDetailCodRecipientaddress
     */
    protected $address;
    /**
     * Indicate the contact details for this shipment.
     *
     * @var ShipV1ShipmentsPostBodyRequestedShipmentShipmentSpecialServicesShipmentCODDetailCodRecipientcontact
     */
    protected $contact;
    /**
     * This is FedEx Account number details.
     *
     * @var ShipV1ShipmentsPostBodyRequestedShipmentShipmentSpecialServicesShipmentCODDetailCodRecipientaccountNumber
     */
    protected $accountNumber;
    /**
     * This is the tax identification number details.
     *
     * @var list<ShipV1ShipmentsPostBodyRequestedShipmentShipmentSpecialServicesShipmentCODDetailCodRecipienttinsItem>
     */
    protected $tins;
    /**
     * This is detailed information on physical location. May be used as an actual physical address (place to which one could go), or as a container of address parts which should be handled as a unit (such as a city-state-ZIP combination within the US).
     *
     * @return ShipV1ShipmentsPostBodyRequestedShipmentShipmentSpecialServicesShipmentCODDetailCodRecipientaddress
     */
    public function getAddress(): ShipV1ShipmentsPostBodyRequestedShipmentShipmentSpecialServicesShipmentCODDetailCodRecipientaddress
    {
        return $this->address;
    }
    /**
     * This is detailed information on physical location. May be used as an actual physical address (place to which one could go), or as a container of address parts which should be handled as a unit (such as a city-state-ZIP combination within the US).
     *
     * @param ShipV1ShipmentsPostBodyRequestedShipmentShipmentSpecialServicesShipmentCODDetailCodRecipientaddress $address
     *
     * @return self
     */
    public function setAddress(ShipV1ShipmentsPostBodyRequestedShipmentShipmentSpecialServicesShipmentCODDetailCodRecipientaddress $address): self
    {
        $this->initialized['address'] = true;
        $this->address = $address;
        return $this;
    }
    /**
     * Indicate the contact details for this shipment.
     *
     * @return ShipV1ShipmentsPostBodyRequestedShipmentShipmentSpecialServicesShipmentCODDetailCodRecipientcontact
     */
    public function getContact(): ShipV1ShipmentsPostBodyRequestedShipmentShipmentSpecialServicesShipmentCODDetailCodRecipientcontact
    {
        return $this->contact;
    }
    /**
     * Indicate the contact details for this shipment.
     *
     * @param ShipV1ShipmentsPostBodyRequestedShipmentShipmentSpecialServicesShipmentCODDetailCodRecipientcontact $contact
     *
     * @return self
     */
    public function setContact(ShipV1ShipmentsPostBodyRequestedShipmentShipmentSpecialServicesShipmentCODDetailCodRecipientcontact $contact): self
    {
        $this->initialized['contact'] = true;
        $this->contact = $contact;
        return $this;
    }
    /**
     * This is FedEx Account number details.
     *
     * @return ShipV1ShipmentsPostBodyRequestedShipmentShipmentSpecialServicesShipmentCODDetailCodRecipientaccountNumber
     */
    public function getAccountNumber(): ShipV1ShipmentsPostBodyRequestedShipmentShipmentSpecialServicesShipmentCODDetailCodRecipientaccountNumber
    {
        return $this->accountNumber;
    }
    /**
     * This is FedEx Account number details.
     *
     * @param ShipV1ShipmentsPostBodyRequestedShipmentShipmentSpecialServicesShipmentCODDetailCodRecipientaccountNumber $accountNumber
     *
     * @return self
     */
    public function setAccountNumber(ShipV1ShipmentsPostBodyRequestedShipmentShipmentSpecialServicesShipmentCODDetailCodRecipientaccountNumber $accountNumber): self
    {
        $this->initialized['accountNumber'] = true;
        $this->accountNumber = $accountNumber;
        return $this;
    }
    /**
     * This is the tax identification number details.
     *
     * @return list<ShipV1ShipmentsPostBodyRequestedShipmentShipmentSpecialServicesShipmentCODDetailCodRecipienttinsItem>
     */
    public function getTins(): array
    {
        return $this->tins;
    }
    /**
     * This is the tax identification number details.
     *
     * @param list<ShipV1ShipmentsPostBodyRequestedShipmentShipmentSpecialServicesShipmentCODDetailCodRecipienttinsItem> $tins
     *
     * @return self
     */
    public function setTins(array $tins): self
    {
        $this->initialized['tins'] = true;
        $this->tins = $tins;
        return $this;
    }
}
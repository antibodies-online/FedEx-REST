<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShipmentSpecialServicesShipmentCODDetailCodRecipient extends \ArrayObject
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
     * @var ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShipmentSpecialServicesShipmentCODDetailCodRecipientaddress
     */
    protected $address;
    /**
     * Indicate the contact details for this shipment.
     *
     * @var ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShipmentSpecialServicesShipmentCODDetailCodRecipientcontact
     */
    protected $contact;
    /**
     * This is FedEx Account number details.
     *
     * @var ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShipmentSpecialServicesShipmentCODDetailCodRecipientaccountNumber
     */
    protected $accountNumber;
    /**
     * This is the tax identification number details.
     *
     * @var list<ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShipmentSpecialServicesShipmentCODDetailCodRecipienttinsItem>
     */
    protected $tins;
    /**
     * This is detailed information on physical location. May be used as an actual physical address (place to which one could go), or as a container of address parts which should be handled as a unit (such as a city-state-ZIP combination within the US).
     *
     * @return ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShipmentSpecialServicesShipmentCODDetailCodRecipientaddress
     */
    public function getAddress(): ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShipmentSpecialServicesShipmentCODDetailCodRecipientaddress
    {
        return $this->address;
    }
    /**
     * This is detailed information on physical location. May be used as an actual physical address (place to which one could go), or as a container of address parts which should be handled as a unit (such as a city-state-ZIP combination within the US).
     *
     * @param ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShipmentSpecialServicesShipmentCODDetailCodRecipientaddress $address
     *
     * @return self
     */
    public function setAddress(ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShipmentSpecialServicesShipmentCODDetailCodRecipientaddress $address): self
    {
        $this->initialized['address'] = true;
        $this->address = $address;
        return $this;
    }
    /**
     * Indicate the contact details for this shipment.
     *
     * @return ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShipmentSpecialServicesShipmentCODDetailCodRecipientcontact
     */
    public function getContact(): ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShipmentSpecialServicesShipmentCODDetailCodRecipientcontact
    {
        return $this->contact;
    }
    /**
     * Indicate the contact details for this shipment.
     *
     * @param ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShipmentSpecialServicesShipmentCODDetailCodRecipientcontact $contact
     *
     * @return self
     */
    public function setContact(ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShipmentSpecialServicesShipmentCODDetailCodRecipientcontact $contact): self
    {
        $this->initialized['contact'] = true;
        $this->contact = $contact;
        return $this;
    }
    /**
     * This is FedEx Account number details.
     *
     * @return ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShipmentSpecialServicesShipmentCODDetailCodRecipientaccountNumber
     */
    public function getAccountNumber(): ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShipmentSpecialServicesShipmentCODDetailCodRecipientaccountNumber
    {
        return $this->accountNumber;
    }
    /**
     * This is FedEx Account number details.
     *
     * @param ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShipmentSpecialServicesShipmentCODDetailCodRecipientaccountNumber $accountNumber
     *
     * @return self
     */
    public function setAccountNumber(ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShipmentSpecialServicesShipmentCODDetailCodRecipientaccountNumber $accountNumber): self
    {
        $this->initialized['accountNumber'] = true;
        $this->accountNumber = $accountNumber;
        return $this;
    }
    /**
     * This is the tax identification number details.
     *
     * @return list<ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShipmentSpecialServicesShipmentCODDetailCodRecipienttinsItem>
     */
    public function getTins(): array
    {
        return $this->tins;
    }
    /**
     * This is the tax identification number details.
     *
     * @param list<ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShipmentSpecialServicesShipmentCODDetailCodRecipienttinsItem> $tins
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
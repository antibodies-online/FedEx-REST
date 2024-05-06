<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1OpenshipmentsCreatePostBodyRequestedShipmentShipmentSpecialServicesShipmentCODDetailCodRecipient extends \ArrayObject
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
     * @var ShipV1OpenshipmentsCreatePostBodyRequestedShipmentShipmentSpecialServicesShipmentCODDetailCodRecipientaddress
     */
    protected $address;
    /**
     * Indicate the contact details for this shipment.
     *
     * @var ShipV1OpenshipmentsCreatePostBodyRequestedShipmentShipmentSpecialServicesShipmentCODDetailCodRecipientcontact
     */
    protected $contact;
    /**
     * This is FedEx Account number details.
     *
     * @var ShipV1OpenshipmentsCreatePostBodyRequestedShipmentShipmentSpecialServicesShipmentCODDetailCodRecipientaccountNumber
     */
    protected $accountNumber;
    /**
     * This is the tax identification number details.
     *
     * @var list<ShipV1OpenshipmentsCreatePostBodyRequestedShipmentShipmentSpecialServicesShipmentCODDetailCodRecipienttinsItem>
     */
    protected $tins;
    /**
     * This is detailed information on physical location. May be used as an actual physical address (place to which one could go), or as a container of address parts which should be handled as a unit (such as a city-state-ZIP combination within the US).
     *
     * @return ShipV1OpenshipmentsCreatePostBodyRequestedShipmentShipmentSpecialServicesShipmentCODDetailCodRecipientaddress
     */
    public function getAddress() : ShipV1OpenshipmentsCreatePostBodyRequestedShipmentShipmentSpecialServicesShipmentCODDetailCodRecipientaddress
    {
        return $this->address;
    }
    /**
     * This is detailed information on physical location. May be used as an actual physical address (place to which one could go), or as a container of address parts which should be handled as a unit (such as a city-state-ZIP combination within the US).
     *
     * @param ShipV1OpenshipmentsCreatePostBodyRequestedShipmentShipmentSpecialServicesShipmentCODDetailCodRecipientaddress $address
     *
     * @return self
     */
    public function setAddress(ShipV1OpenshipmentsCreatePostBodyRequestedShipmentShipmentSpecialServicesShipmentCODDetailCodRecipientaddress $address) : self
    {
        $this->initialized['address'] = true;
        $this->address = $address;
        return $this;
    }
    /**
     * Indicate the contact details for this shipment.
     *
     * @return ShipV1OpenshipmentsCreatePostBodyRequestedShipmentShipmentSpecialServicesShipmentCODDetailCodRecipientcontact
     */
    public function getContact() : ShipV1OpenshipmentsCreatePostBodyRequestedShipmentShipmentSpecialServicesShipmentCODDetailCodRecipientcontact
    {
        return $this->contact;
    }
    /**
     * Indicate the contact details for this shipment.
     *
     * @param ShipV1OpenshipmentsCreatePostBodyRequestedShipmentShipmentSpecialServicesShipmentCODDetailCodRecipientcontact $contact
     *
     * @return self
     */
    public function setContact(ShipV1OpenshipmentsCreatePostBodyRequestedShipmentShipmentSpecialServicesShipmentCODDetailCodRecipientcontact $contact) : self
    {
        $this->initialized['contact'] = true;
        $this->contact = $contact;
        return $this;
    }
    /**
     * This is FedEx Account number details.
     *
     * @return ShipV1OpenshipmentsCreatePostBodyRequestedShipmentShipmentSpecialServicesShipmentCODDetailCodRecipientaccountNumber
     */
    public function getAccountNumber() : ShipV1OpenshipmentsCreatePostBodyRequestedShipmentShipmentSpecialServicesShipmentCODDetailCodRecipientaccountNumber
    {
        return $this->accountNumber;
    }
    /**
     * This is FedEx Account number details.
     *
     * @param ShipV1OpenshipmentsCreatePostBodyRequestedShipmentShipmentSpecialServicesShipmentCODDetailCodRecipientaccountNumber $accountNumber
     *
     * @return self
     */
    public function setAccountNumber(ShipV1OpenshipmentsCreatePostBodyRequestedShipmentShipmentSpecialServicesShipmentCODDetailCodRecipientaccountNumber $accountNumber) : self
    {
        $this->initialized['accountNumber'] = true;
        $this->accountNumber = $accountNumber;
        return $this;
    }
    /**
     * This is the tax identification number details.
     *
     * @return list<ShipV1OpenshipmentsCreatePostBodyRequestedShipmentShipmentSpecialServicesShipmentCODDetailCodRecipienttinsItem>
     */
    public function getTins() : array
    {
        return $this->tins;
    }
    /**
     * This is the tax identification number details.
     *
     * @param list<ShipV1OpenshipmentsCreatePostBodyRequestedShipmentShipmentSpecialServicesShipmentCODDetailCodRecipienttinsItem> $tins
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
<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1OpenshipmentsCreatePostBodyRequestedShipmentCustomsClearanceDetailImporterOfRecord extends \ArrayObject
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
     * @var ShipV1OpenshipmentsCreatePostBodyRequestedShipmentCustomsClearanceDetailImporterOfRecordaddress
     */
    protected $address;
    /**
     * Indicate the contact details for this shipment.
     *
     * @var ShipV1OpenshipmentsCreatePostBodyRequestedShipmentCustomsClearanceDetailImporterOfRecordcontact
     */
    protected $contact;
    /**
     * This is FedEx Account number details.
     *
     * @var ShipV1OpenshipmentsCreatePostBodyRequestedShipmentCustomsClearanceDetailImporterOfRecordaccountNumber
     */
    protected $accountNumber;
    /**
     * This is the tax identification number details.
     *
     * @var list<ShipV1OpenshipmentsCreatePostBodyRequestedShipmentCustomsClearanceDetailImporterOfRecordtinsItem>
     */
    protected $tins;
    /**
     * This is detailed information on physical location. May be used as an actual physical address (place to which one could go), or as a container of address parts which should be handled as a unit (such as a city-state-ZIP combination within the US).
     *
     * @return ShipV1OpenshipmentsCreatePostBodyRequestedShipmentCustomsClearanceDetailImporterOfRecordaddress
     */
    public function getAddress() : ShipV1OpenshipmentsCreatePostBodyRequestedShipmentCustomsClearanceDetailImporterOfRecordaddress
    {
        return $this->address;
    }
    /**
     * This is detailed information on physical location. May be used as an actual physical address (place to which one could go), or as a container of address parts which should be handled as a unit (such as a city-state-ZIP combination within the US).
     *
     * @param ShipV1OpenshipmentsCreatePostBodyRequestedShipmentCustomsClearanceDetailImporterOfRecordaddress $address
     *
     * @return self
     */
    public function setAddress(ShipV1OpenshipmentsCreatePostBodyRequestedShipmentCustomsClearanceDetailImporterOfRecordaddress $address) : self
    {
        $this->initialized['address'] = true;
        $this->address = $address;
        return $this;
    }
    /**
     * Indicate the contact details for this shipment.
     *
     * @return ShipV1OpenshipmentsCreatePostBodyRequestedShipmentCustomsClearanceDetailImporterOfRecordcontact
     */
    public function getContact() : ShipV1OpenshipmentsCreatePostBodyRequestedShipmentCustomsClearanceDetailImporterOfRecordcontact
    {
        return $this->contact;
    }
    /**
     * Indicate the contact details for this shipment.
     *
     * @param ShipV1OpenshipmentsCreatePostBodyRequestedShipmentCustomsClearanceDetailImporterOfRecordcontact $contact
     *
     * @return self
     */
    public function setContact(ShipV1OpenshipmentsCreatePostBodyRequestedShipmentCustomsClearanceDetailImporterOfRecordcontact $contact) : self
    {
        $this->initialized['contact'] = true;
        $this->contact = $contact;
        return $this;
    }
    /**
     * This is FedEx Account number details.
     *
     * @return ShipV1OpenshipmentsCreatePostBodyRequestedShipmentCustomsClearanceDetailImporterOfRecordaccountNumber
     */
    public function getAccountNumber() : ShipV1OpenshipmentsCreatePostBodyRequestedShipmentCustomsClearanceDetailImporterOfRecordaccountNumber
    {
        return $this->accountNumber;
    }
    /**
     * This is FedEx Account number details.
     *
     * @param ShipV1OpenshipmentsCreatePostBodyRequestedShipmentCustomsClearanceDetailImporterOfRecordaccountNumber $accountNumber
     *
     * @return self
     */
    public function setAccountNumber(ShipV1OpenshipmentsCreatePostBodyRequestedShipmentCustomsClearanceDetailImporterOfRecordaccountNumber $accountNumber) : self
    {
        $this->initialized['accountNumber'] = true;
        $this->accountNumber = $accountNumber;
        return $this;
    }
    /**
     * This is the tax identification number details.
     *
     * @return list<ShipV1OpenshipmentsCreatePostBodyRequestedShipmentCustomsClearanceDetailImporterOfRecordtinsItem>
     */
    public function getTins() : array
    {
        return $this->tins;
    }
    /**
     * This is the tax identification number details.
     *
     * @param list<ShipV1OpenshipmentsCreatePostBodyRequestedShipmentCustomsClearanceDetailImporterOfRecordtinsItem> $tins
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
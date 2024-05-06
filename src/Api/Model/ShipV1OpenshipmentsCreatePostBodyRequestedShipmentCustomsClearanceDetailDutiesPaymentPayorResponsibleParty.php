<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1OpenshipmentsCreatePostBodyRequestedShipmentCustomsClearanceDetailDutiesPaymentPayorResponsibleParty extends \ArrayObject
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
     * This is detailed information on physical location. May be used as an actual physical address (place to which one could go), or as a container of address parts which should be handled as a unit (such as a city-state-ZIP combination within the U.S.).
     *
     * @var ShipV1OpenshipmentsCreatePostBodyRequestedShipmentCustomsClearanceDetailDutiesPaymentPayorResponsiblePartyAddress
     */
    protected $address;
    /**
     * Indicate the contact details of the shipper.
     *
     * @var ShipV1OpenshipmentsCreatePostBodyRequestedShipmentCustomsClearanceDetailDutiesPaymentPayorResponsiblePartyContact
     */
    protected $contact;
    /**
     * This is FedEx Account number details.
     *
     * @var ShipV1OpenshipmentsCreatePostBodyRequestedShipmentCustomsClearanceDetailDutiesPaymentPayorResponsiblePartyAccountNumber
     */
    protected $accountNumber;
    /**
     * This is the tax identification number details.
     *
     * @var list<ShipV1OpenshipmentsCreatePostBodyRequestedShipmentCustomsClearanceDetailDutiesPaymentPayorResponsiblePartyTinsItem>
     */
    protected $tins;
    /**
     * This is detailed information on physical location. May be used as an actual physical address (place to which one could go), or as a container of address parts which should be handled as a unit (such as a city-state-ZIP combination within the U.S.).
     *
     * @return ShipV1OpenshipmentsCreatePostBodyRequestedShipmentCustomsClearanceDetailDutiesPaymentPayorResponsiblePartyAddress
     */
    public function getAddress() : ShipV1OpenshipmentsCreatePostBodyRequestedShipmentCustomsClearanceDetailDutiesPaymentPayorResponsiblePartyAddress
    {
        return $this->address;
    }
    /**
     * This is detailed information on physical location. May be used as an actual physical address (place to which one could go), or as a container of address parts which should be handled as a unit (such as a city-state-ZIP combination within the U.S.).
     *
     * @param ShipV1OpenshipmentsCreatePostBodyRequestedShipmentCustomsClearanceDetailDutiesPaymentPayorResponsiblePartyAddress $address
     *
     * @return self
     */
    public function setAddress(ShipV1OpenshipmentsCreatePostBodyRequestedShipmentCustomsClearanceDetailDutiesPaymentPayorResponsiblePartyAddress $address) : self
    {
        $this->initialized['address'] = true;
        $this->address = $address;
        return $this;
    }
    /**
     * Indicate the contact details of the shipper.
     *
     * @return ShipV1OpenshipmentsCreatePostBodyRequestedShipmentCustomsClearanceDetailDutiesPaymentPayorResponsiblePartyContact
     */
    public function getContact() : ShipV1OpenshipmentsCreatePostBodyRequestedShipmentCustomsClearanceDetailDutiesPaymentPayorResponsiblePartyContact
    {
        return $this->contact;
    }
    /**
     * Indicate the contact details of the shipper.
     *
     * @param ShipV1OpenshipmentsCreatePostBodyRequestedShipmentCustomsClearanceDetailDutiesPaymentPayorResponsiblePartyContact $contact
     *
     * @return self
     */
    public function setContact(ShipV1OpenshipmentsCreatePostBodyRequestedShipmentCustomsClearanceDetailDutiesPaymentPayorResponsiblePartyContact $contact) : self
    {
        $this->initialized['contact'] = true;
        $this->contact = $contact;
        return $this;
    }
    /**
     * This is FedEx Account number details.
     *
     * @return ShipV1OpenshipmentsCreatePostBodyRequestedShipmentCustomsClearanceDetailDutiesPaymentPayorResponsiblePartyAccountNumber
     */
    public function getAccountNumber() : ShipV1OpenshipmentsCreatePostBodyRequestedShipmentCustomsClearanceDetailDutiesPaymentPayorResponsiblePartyAccountNumber
    {
        return $this->accountNumber;
    }
    /**
     * This is FedEx Account number details.
     *
     * @param ShipV1OpenshipmentsCreatePostBodyRequestedShipmentCustomsClearanceDetailDutiesPaymentPayorResponsiblePartyAccountNumber $accountNumber
     *
     * @return self
     */
    public function setAccountNumber(ShipV1OpenshipmentsCreatePostBodyRequestedShipmentCustomsClearanceDetailDutiesPaymentPayorResponsiblePartyAccountNumber $accountNumber) : self
    {
        $this->initialized['accountNumber'] = true;
        $this->accountNumber = $accountNumber;
        return $this;
    }
    /**
     * This is the tax identification number details.
     *
     * @return list<ShipV1OpenshipmentsCreatePostBodyRequestedShipmentCustomsClearanceDetailDutiesPaymentPayorResponsiblePartyTinsItem>
     */
    public function getTins() : array
    {
        return $this->tins;
    }
    /**
     * This is the tax identification number details.
     *
     * @param list<ShipV1OpenshipmentsCreatePostBodyRequestedShipmentCustomsClearanceDetailDutiesPaymentPayorResponsiblePartyTinsItem> $tins
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
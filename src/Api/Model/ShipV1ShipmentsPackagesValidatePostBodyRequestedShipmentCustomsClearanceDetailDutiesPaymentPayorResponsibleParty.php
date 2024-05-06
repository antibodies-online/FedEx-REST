<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentCustomsClearanceDetailDutiesPaymentPayorResponsibleParty extends \ArrayObject
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
     * @var ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentCustomsClearanceDetailDutiesPaymentPayorResponsiblePartyAddress
     */
    protected $address;
    /**
     * Indicate the contact details of the shipper.
     *
     * @var ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentCustomsClearanceDetailDutiesPaymentPayorResponsiblePartyContact
     */
    protected $contact;
    /**
     * This is FedEx Account number details.
     *
     * @var ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentCustomsClearanceDetailDutiesPaymentPayorResponsiblePartyAccountNumber
     */
    protected $accountNumber;
    /**
     * This is the tax identification number details.
     *
     * @var list<ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentCustomsClearanceDetailDutiesPaymentPayorResponsiblePartyTinsItem>
     */
    protected $tins;
    /**
     * This is detailed information on physical location. May be used as an actual physical address (place to which one could go), or as a container of address parts which should be handled as a unit (such as a city-state-ZIP combination within the U.S.).
     *
     * @return ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentCustomsClearanceDetailDutiesPaymentPayorResponsiblePartyAddress
     */
    public function getAddress() : ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentCustomsClearanceDetailDutiesPaymentPayorResponsiblePartyAddress
    {
        return $this->address;
    }
    /**
     * This is detailed information on physical location. May be used as an actual physical address (place to which one could go), or as a container of address parts which should be handled as a unit (such as a city-state-ZIP combination within the U.S.).
     *
     * @param ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentCustomsClearanceDetailDutiesPaymentPayorResponsiblePartyAddress $address
     *
     * @return self
     */
    public function setAddress(ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentCustomsClearanceDetailDutiesPaymentPayorResponsiblePartyAddress $address) : self
    {
        $this->initialized['address'] = true;
        $this->address = $address;
        return $this;
    }
    /**
     * Indicate the contact details of the shipper.
     *
     * @return ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentCustomsClearanceDetailDutiesPaymentPayorResponsiblePartyContact
     */
    public function getContact() : ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentCustomsClearanceDetailDutiesPaymentPayorResponsiblePartyContact
    {
        return $this->contact;
    }
    /**
     * Indicate the contact details of the shipper.
     *
     * @param ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentCustomsClearanceDetailDutiesPaymentPayorResponsiblePartyContact $contact
     *
     * @return self
     */
    public function setContact(ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentCustomsClearanceDetailDutiesPaymentPayorResponsiblePartyContact $contact) : self
    {
        $this->initialized['contact'] = true;
        $this->contact = $contact;
        return $this;
    }
    /**
     * This is FedEx Account number details.
     *
     * @return ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentCustomsClearanceDetailDutiesPaymentPayorResponsiblePartyAccountNumber
     */
    public function getAccountNumber() : ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentCustomsClearanceDetailDutiesPaymentPayorResponsiblePartyAccountNumber
    {
        return $this->accountNumber;
    }
    /**
     * This is FedEx Account number details.
     *
     * @param ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentCustomsClearanceDetailDutiesPaymentPayorResponsiblePartyAccountNumber $accountNumber
     *
     * @return self
     */
    public function setAccountNumber(ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentCustomsClearanceDetailDutiesPaymentPayorResponsiblePartyAccountNumber $accountNumber) : self
    {
        $this->initialized['accountNumber'] = true;
        $this->accountNumber = $accountNumber;
        return $this;
    }
    /**
     * This is the tax identification number details.
     *
     * @return list<ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentCustomsClearanceDetailDutiesPaymentPayorResponsiblePartyTinsItem>
     */
    public function getTins() : array
    {
        return $this->tins;
    }
    /**
     * This is the tax identification number details.
     *
     * @param list<ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentCustomsClearanceDetailDutiesPaymentPayorResponsiblePartyTinsItem> $tins
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
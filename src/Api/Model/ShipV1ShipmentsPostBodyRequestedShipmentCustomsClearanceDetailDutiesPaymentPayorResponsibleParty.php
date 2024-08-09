<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1ShipmentsPostBodyRequestedShipmentCustomsClearanceDetailDutiesPaymentPayorResponsibleParty extends \ArrayObject
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
     * This is detailed information on physical location. May be used as an actual physical address (place to which one could go), or as a container of address parts which should be handled as a unit (such as a city-state-ZIP combination within the U.S.).
     *
     * @var ShipV1ShipmentsPostBodyRequestedShipmentCustomsClearanceDetailDutiesPaymentPayorResponsiblePartyAddress
     */
    protected $address;
    /**
     * Indicate the contact details of the shipper.
     *
     * @var ShipV1ShipmentsPostBodyRequestedShipmentCustomsClearanceDetailDutiesPaymentPayorResponsiblePartyContact
     */
    protected $contact;
    /**
     * This is FedEx Account number details.
     *
     * @var ShipV1ShipmentsPostBodyRequestedShipmentCustomsClearanceDetailDutiesPaymentPayorResponsiblePartyAccountNumber
     */
    protected $accountNumber;
    /**
     * This is the tax identification number details.
     *
     * @var list<ShipV1ShipmentsPostBodyRequestedShipmentCustomsClearanceDetailDutiesPaymentPayorResponsiblePartyTinsItem>
     */
    protected $tins;
    /**
     * This is detailed information on physical location. May be used as an actual physical address (place to which one could go), or as a container of address parts which should be handled as a unit (such as a city-state-ZIP combination within the U.S.).
     *
     * @return ShipV1ShipmentsPostBodyRequestedShipmentCustomsClearanceDetailDutiesPaymentPayorResponsiblePartyAddress
     */
    public function getAddress(): ShipV1ShipmentsPostBodyRequestedShipmentCustomsClearanceDetailDutiesPaymentPayorResponsiblePartyAddress
    {
        return $this->address;
    }
    /**
     * This is detailed information on physical location. May be used as an actual physical address (place to which one could go), or as a container of address parts which should be handled as a unit (such as a city-state-ZIP combination within the U.S.).
     *
     * @param ShipV1ShipmentsPostBodyRequestedShipmentCustomsClearanceDetailDutiesPaymentPayorResponsiblePartyAddress $address
     *
     * @return self
     */
    public function setAddress(ShipV1ShipmentsPostBodyRequestedShipmentCustomsClearanceDetailDutiesPaymentPayorResponsiblePartyAddress $address): self
    {
        $this->initialized['address'] = true;
        $this->address = $address;
        return $this;
    }
    /**
     * Indicate the contact details of the shipper.
     *
     * @return ShipV1ShipmentsPostBodyRequestedShipmentCustomsClearanceDetailDutiesPaymentPayorResponsiblePartyContact
     */
    public function getContact(): ShipV1ShipmentsPostBodyRequestedShipmentCustomsClearanceDetailDutiesPaymentPayorResponsiblePartyContact
    {
        return $this->contact;
    }
    /**
     * Indicate the contact details of the shipper.
     *
     * @param ShipV1ShipmentsPostBodyRequestedShipmentCustomsClearanceDetailDutiesPaymentPayorResponsiblePartyContact $contact
     *
     * @return self
     */
    public function setContact(ShipV1ShipmentsPostBodyRequestedShipmentCustomsClearanceDetailDutiesPaymentPayorResponsiblePartyContact $contact): self
    {
        $this->initialized['contact'] = true;
        $this->contact = $contact;
        return $this;
    }
    /**
     * This is FedEx Account number details.
     *
     * @return ShipV1ShipmentsPostBodyRequestedShipmentCustomsClearanceDetailDutiesPaymentPayorResponsiblePartyAccountNumber
     */
    public function getAccountNumber(): ShipV1ShipmentsPostBodyRequestedShipmentCustomsClearanceDetailDutiesPaymentPayorResponsiblePartyAccountNumber
    {
        return $this->accountNumber;
    }
    /**
     * This is FedEx Account number details.
     *
     * @param ShipV1ShipmentsPostBodyRequestedShipmentCustomsClearanceDetailDutiesPaymentPayorResponsiblePartyAccountNumber $accountNumber
     *
     * @return self
     */
    public function setAccountNumber(ShipV1ShipmentsPostBodyRequestedShipmentCustomsClearanceDetailDutiesPaymentPayorResponsiblePartyAccountNumber $accountNumber): self
    {
        $this->initialized['accountNumber'] = true;
        $this->accountNumber = $accountNumber;
        return $this;
    }
    /**
     * This is the tax identification number details.
     *
     * @return list<ShipV1ShipmentsPostBodyRequestedShipmentCustomsClearanceDetailDutiesPaymentPayorResponsiblePartyTinsItem>
     */
    public function getTins(): array
    {
        return $this->tins;
    }
    /**
     * This is the tax identification number details.
     *
     * @param list<ShipV1ShipmentsPostBodyRequestedShipmentCustomsClearanceDetailDutiesPaymentPayorResponsiblePartyTinsItem> $tins
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
<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1FreightShipmentsPostBodyFreightRequestedShipmentCustomsClearanceDetailDutiesPaymentPayorResponsibleParty extends \ArrayObject
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
     * @var ShipV1FreightShipmentsPostBodyFreightRequestedShipmentCustomsClearanceDetailDutiesPaymentPayorResponsiblePartyAddress
     */
    protected $address;
    /**
     * Indicate the contact details of the shipper.
     *
     * @var ShipV1FreightShipmentsPostBodyFreightRequestedShipmentCustomsClearanceDetailDutiesPaymentPayorResponsiblePartyContact
     */
    protected $contact;
    /**
     * Specify the assigned FedEx Account Number. If the transportation charges to be billed to a payor other than the sender or recipient, provide the FedEx Account Number. Specify this field when payment type is selected as SENDER.
     *
     * @var ShipV1FreightShipmentsPostBodyFreightRequestedShipmentCustomsClearanceDetailDutiesPaymentPayorResponsiblePartyAccountNumber
     */
    protected $accountNumber;
    /**
     * This is the tax identification number details.
     *
     * @var list<ShipV1FreightShipmentsPostBodyFreightRequestedShipmentCustomsClearanceDetailDutiesPaymentPayorResponsiblePartyTinsItem>
     */
    protected $tins;
    /**
     * This is detailed information on physical location. May be used as an actual physical address (place to which one could go), or as a container of address parts which should be handled as a unit (such as a city-state-ZIP combination within the U.S.).
     *
     * @return ShipV1FreightShipmentsPostBodyFreightRequestedShipmentCustomsClearanceDetailDutiesPaymentPayorResponsiblePartyAddress
     */
    public function getAddress(): ShipV1FreightShipmentsPostBodyFreightRequestedShipmentCustomsClearanceDetailDutiesPaymentPayorResponsiblePartyAddress
    {
        return $this->address;
    }
    /**
     * This is detailed information on physical location. May be used as an actual physical address (place to which one could go), or as a container of address parts which should be handled as a unit (such as a city-state-ZIP combination within the U.S.).
     *
     * @param ShipV1FreightShipmentsPostBodyFreightRequestedShipmentCustomsClearanceDetailDutiesPaymentPayorResponsiblePartyAddress $address
     *
     * @return self
     */
    public function setAddress(ShipV1FreightShipmentsPostBodyFreightRequestedShipmentCustomsClearanceDetailDutiesPaymentPayorResponsiblePartyAddress $address): self
    {
        $this->initialized['address'] = true;
        $this->address = $address;
        return $this;
    }
    /**
     * Indicate the contact details of the shipper.
     *
     * @return ShipV1FreightShipmentsPostBodyFreightRequestedShipmentCustomsClearanceDetailDutiesPaymentPayorResponsiblePartyContact
     */
    public function getContact(): ShipV1FreightShipmentsPostBodyFreightRequestedShipmentCustomsClearanceDetailDutiesPaymentPayorResponsiblePartyContact
    {
        return $this->contact;
    }
    /**
     * Indicate the contact details of the shipper.
     *
     * @param ShipV1FreightShipmentsPostBodyFreightRequestedShipmentCustomsClearanceDetailDutiesPaymentPayorResponsiblePartyContact $contact
     *
     * @return self
     */
    public function setContact(ShipV1FreightShipmentsPostBodyFreightRequestedShipmentCustomsClearanceDetailDutiesPaymentPayorResponsiblePartyContact $contact): self
    {
        $this->initialized['contact'] = true;
        $this->contact = $contact;
        return $this;
    }
    /**
     * Specify the assigned FedEx Account Number. If the transportation charges to be billed to a payor other than the sender or recipient, provide the FedEx Account Number. Specify this field when payment type is selected as SENDER.
     *
     * @return ShipV1FreightShipmentsPostBodyFreightRequestedShipmentCustomsClearanceDetailDutiesPaymentPayorResponsiblePartyAccountNumber
     */
    public function getAccountNumber(): ShipV1FreightShipmentsPostBodyFreightRequestedShipmentCustomsClearanceDetailDutiesPaymentPayorResponsiblePartyAccountNumber
    {
        return $this->accountNumber;
    }
    /**
     * Specify the assigned FedEx Account Number. If the transportation charges to be billed to a payor other than the sender or recipient, provide the FedEx Account Number. Specify this field when payment type is selected as SENDER.
     *
     * @param ShipV1FreightShipmentsPostBodyFreightRequestedShipmentCustomsClearanceDetailDutiesPaymentPayorResponsiblePartyAccountNumber $accountNumber
     *
     * @return self
     */
    public function setAccountNumber(ShipV1FreightShipmentsPostBodyFreightRequestedShipmentCustomsClearanceDetailDutiesPaymentPayorResponsiblePartyAccountNumber $accountNumber): self
    {
        $this->initialized['accountNumber'] = true;
        $this->accountNumber = $accountNumber;
        return $this;
    }
    /**
     * This is the tax identification number details.
     *
     * @return list<ShipV1FreightShipmentsPostBodyFreightRequestedShipmentCustomsClearanceDetailDutiesPaymentPayorResponsiblePartyTinsItem>
     */
    public function getTins(): array
    {
        return $this->tins;
    }
    /**
     * This is the tax identification number details.
     *
     * @param list<ShipV1FreightShipmentsPostBodyFreightRequestedShipmentCustomsClearanceDetailDutiesPaymentPayorResponsiblePartyTinsItem> $tins
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
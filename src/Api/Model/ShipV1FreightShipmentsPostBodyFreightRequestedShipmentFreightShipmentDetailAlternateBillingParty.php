<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentDetailAlternateBillingParty extends \ArrayObject
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
     * Specify detailed Billing Address information for above FedEx Freight Account Number. May be used as an actual physical address (place to which one could go), or as a container of address parts which should be handled as a unit (such as a city-state-ZIP combination within the US).
     *
     * @var ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentDetailAlternateBillingPartyaddress
     */
    protected $address;
    /**
     * Indicate the contact details for this shipment.
     *
     * @var ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentDetailAlternateBillingPartycontact
     */
    protected $contact;
    /**
     * Specify the assigned FedEx Account Number. If the transportation charges to be billed to a payor other than the sender or recipient, provide the FedEx Account Number. Specify this field when payment type is selected as SENDER.
     *
     * @var ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentDetailAlternateBillingPartyaccountNumber
     */
    protected $accountNumber;
    /**
     * This is the tax identification number details.
     *
     * @var list<ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentDetailAlternateBillingPartytinsItem>
     */
    protected $tins;
    /**
     * Specify detailed Billing Address information for above FedEx Freight Account Number. May be used as an actual physical address (place to which one could go), or as a container of address parts which should be handled as a unit (such as a city-state-ZIP combination within the US).
     *
     * @return ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentDetailAlternateBillingPartyaddress
     */
    public function getAddress() : ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentDetailAlternateBillingPartyaddress
    {
        return $this->address;
    }
    /**
     * Specify detailed Billing Address information for above FedEx Freight Account Number. May be used as an actual physical address (place to which one could go), or as a container of address parts which should be handled as a unit (such as a city-state-ZIP combination within the US).
     *
     * @param ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentDetailAlternateBillingPartyaddress $address
     *
     * @return self
     */
    public function setAddress(ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentDetailAlternateBillingPartyaddress $address) : self
    {
        $this->initialized['address'] = true;
        $this->address = $address;
        return $this;
    }
    /**
     * Indicate the contact details for this shipment.
     *
     * @return ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentDetailAlternateBillingPartycontact
     */
    public function getContact() : ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentDetailAlternateBillingPartycontact
    {
        return $this->contact;
    }
    /**
     * Indicate the contact details for this shipment.
     *
     * @param ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentDetailAlternateBillingPartycontact $contact
     *
     * @return self
     */
    public function setContact(ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentDetailAlternateBillingPartycontact $contact) : self
    {
        $this->initialized['contact'] = true;
        $this->contact = $contact;
        return $this;
    }
    /**
     * Specify the assigned FedEx Account Number. If the transportation charges to be billed to a payor other than the sender or recipient, provide the FedEx Account Number. Specify this field when payment type is selected as SENDER.
     *
     * @return ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentDetailAlternateBillingPartyaccountNumber
     */
    public function getAccountNumber() : ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentDetailAlternateBillingPartyaccountNumber
    {
        return $this->accountNumber;
    }
    /**
     * Specify the assigned FedEx Account Number. If the transportation charges to be billed to a payor other than the sender or recipient, provide the FedEx Account Number. Specify this field when payment type is selected as SENDER.
     *
     * @param ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentDetailAlternateBillingPartyaccountNumber $accountNumber
     *
     * @return self
     */
    public function setAccountNumber(ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentDetailAlternateBillingPartyaccountNumber $accountNumber) : self
    {
        $this->initialized['accountNumber'] = true;
        $this->accountNumber = $accountNumber;
        return $this;
    }
    /**
     * This is the tax identification number details.
     *
     * @return list<ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentDetailAlternateBillingPartytinsItem>
     */
    public function getTins() : array
    {
        return $this->tins;
    }
    /**
     * This is the tax identification number details.
     *
     * @param list<ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentDetailAlternateBillingPartytinsItem> $tins
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
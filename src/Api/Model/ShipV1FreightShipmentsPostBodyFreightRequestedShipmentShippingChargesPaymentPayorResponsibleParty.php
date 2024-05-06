<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1FreightShipmentsPostBodyFreightRequestedShipmentShippingChargesPaymentPayorResponsibleParty extends \ArrayObject
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
     * @var ShipV1FreightShipmentsPostBodyFreightRequestedShipmentShippingChargesPaymentPayorResponsiblePartyAddress
     */
    protected $address;
    /**
     * Indicate the contact details for this shipment.
     *
     * @var ShipV1FreightShipmentsPostBodyFreightRequestedShipmentShippingChargesPaymentPayorResponsiblePartyContact
     */
    protected $contact;
    /**
     * Specify the assigned FedEx Account Number. If the transportation charges to be billed to a payor other than the sender or recipient, provide the FedEx Account Number. Specify this field when payment type is selected as SENDER.
     *
     * @var ShipV1FreightShipmentsPostBodyFreightRequestedShipmentShippingChargesPaymentPayorResponsiblePartyAccountNumber
     */
    protected $accountNumber;
    /**
     * Specify detailed Billing Address information for above FedEx Freight Account Number. May be used as an actual physical address (place to which one could go), or as a container of address parts which should be handled as a unit (such as a city-state-ZIP combination within the US).
     *
     * @return ShipV1FreightShipmentsPostBodyFreightRequestedShipmentShippingChargesPaymentPayorResponsiblePartyAddress
     */
    public function getAddress() : ShipV1FreightShipmentsPostBodyFreightRequestedShipmentShippingChargesPaymentPayorResponsiblePartyAddress
    {
        return $this->address;
    }
    /**
     * Specify detailed Billing Address information for above FedEx Freight Account Number. May be used as an actual physical address (place to which one could go), or as a container of address parts which should be handled as a unit (such as a city-state-ZIP combination within the US).
     *
     * @param ShipV1FreightShipmentsPostBodyFreightRequestedShipmentShippingChargesPaymentPayorResponsiblePartyAddress $address
     *
     * @return self
     */
    public function setAddress(ShipV1FreightShipmentsPostBodyFreightRequestedShipmentShippingChargesPaymentPayorResponsiblePartyAddress $address) : self
    {
        $this->initialized['address'] = true;
        $this->address = $address;
        return $this;
    }
    /**
     * Indicate the contact details for this shipment.
     *
     * @return ShipV1FreightShipmentsPostBodyFreightRequestedShipmentShippingChargesPaymentPayorResponsiblePartyContact
     */
    public function getContact() : ShipV1FreightShipmentsPostBodyFreightRequestedShipmentShippingChargesPaymentPayorResponsiblePartyContact
    {
        return $this->contact;
    }
    /**
     * Indicate the contact details for this shipment.
     *
     * @param ShipV1FreightShipmentsPostBodyFreightRequestedShipmentShippingChargesPaymentPayorResponsiblePartyContact $contact
     *
     * @return self
     */
    public function setContact(ShipV1FreightShipmentsPostBodyFreightRequestedShipmentShippingChargesPaymentPayorResponsiblePartyContact $contact) : self
    {
        $this->initialized['contact'] = true;
        $this->contact = $contact;
        return $this;
    }
    /**
     * Specify the assigned FedEx Account Number. If the transportation charges to be billed to a payor other than the sender or recipient, provide the FedEx Account Number. Specify this field when payment type is selected as SENDER.
     *
     * @return ShipV1FreightShipmentsPostBodyFreightRequestedShipmentShippingChargesPaymentPayorResponsiblePartyAccountNumber
     */
    public function getAccountNumber() : ShipV1FreightShipmentsPostBodyFreightRequestedShipmentShippingChargesPaymentPayorResponsiblePartyAccountNumber
    {
        return $this->accountNumber;
    }
    /**
     * Specify the assigned FedEx Account Number. If the transportation charges to be billed to a payor other than the sender or recipient, provide the FedEx Account Number. Specify this field when payment type is selected as SENDER.
     *
     * @param ShipV1FreightShipmentsPostBodyFreightRequestedShipmentShippingChargesPaymentPayorResponsiblePartyAccountNumber $accountNumber
     *
     * @return self
     */
    public function setAccountNumber(ShipV1FreightShipmentsPostBodyFreightRequestedShipmentShippingChargesPaymentPayorResponsiblePartyAccountNumber $accountNumber) : self
    {
        $this->initialized['accountNumber'] = true;
        $this->accountNumber = $accountNumber;
        return $this;
    }
}
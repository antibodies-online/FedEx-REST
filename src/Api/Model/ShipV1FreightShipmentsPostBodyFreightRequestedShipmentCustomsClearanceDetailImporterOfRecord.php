<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1FreightShipmentsPostBodyFreightRequestedShipmentCustomsClearanceDetailImporterOfRecord extends \ArrayObject
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
     * @var ShipV1FreightShipmentsPostBodyFreightRequestedShipmentCustomsClearanceDetailImporterOfRecordaddress
     */
    protected $address;
    /**
     * Indicate the contact details for this shipment.
     *
     * @var ShipV1FreightShipmentsPostBodyFreightRequestedShipmentCustomsClearanceDetailImporterOfRecordcontact
     */
    protected $contact;
    /**
     * Specify the assigned FedEx Account Number. If the transportation charges to be billed to a payor other than the sender or recipient, provide the FedEx Account Number. Specify this field when payment type is selected as SENDER.
     *
     * @var ShipV1FreightShipmentsPostBodyFreightRequestedShipmentCustomsClearanceDetailImporterOfRecordaccountNumber
     */
    protected $accountNumber;
    /**
     * This is the tax identification number details.
     *
     * @var list<ShipV1FreightShipmentsPostBodyFreightRequestedShipmentCustomsClearanceDetailImporterOfRecordtinsItem>
     */
    protected $tins;
    /**
     * Specify detailed Billing Address information for above FedEx Freight Account Number. May be used as an actual physical address (place to which one could go), or as a container of address parts which should be handled as a unit (such as a city-state-ZIP combination within the US).
     *
     * @return ShipV1FreightShipmentsPostBodyFreightRequestedShipmentCustomsClearanceDetailImporterOfRecordaddress
     */
    public function getAddress() : ShipV1FreightShipmentsPostBodyFreightRequestedShipmentCustomsClearanceDetailImporterOfRecordaddress
    {
        return $this->address;
    }
    /**
     * Specify detailed Billing Address information for above FedEx Freight Account Number. May be used as an actual physical address (place to which one could go), or as a container of address parts which should be handled as a unit (such as a city-state-ZIP combination within the US).
     *
     * @param ShipV1FreightShipmentsPostBodyFreightRequestedShipmentCustomsClearanceDetailImporterOfRecordaddress $address
     *
     * @return self
     */
    public function setAddress(ShipV1FreightShipmentsPostBodyFreightRequestedShipmentCustomsClearanceDetailImporterOfRecordaddress $address) : self
    {
        $this->initialized['address'] = true;
        $this->address = $address;
        return $this;
    }
    /**
     * Indicate the contact details for this shipment.
     *
     * @return ShipV1FreightShipmentsPostBodyFreightRequestedShipmentCustomsClearanceDetailImporterOfRecordcontact
     */
    public function getContact() : ShipV1FreightShipmentsPostBodyFreightRequestedShipmentCustomsClearanceDetailImporterOfRecordcontact
    {
        return $this->contact;
    }
    /**
     * Indicate the contact details for this shipment.
     *
     * @param ShipV1FreightShipmentsPostBodyFreightRequestedShipmentCustomsClearanceDetailImporterOfRecordcontact $contact
     *
     * @return self
     */
    public function setContact(ShipV1FreightShipmentsPostBodyFreightRequestedShipmentCustomsClearanceDetailImporterOfRecordcontact $contact) : self
    {
        $this->initialized['contact'] = true;
        $this->contact = $contact;
        return $this;
    }
    /**
     * Specify the assigned FedEx Account Number. If the transportation charges to be billed to a payor other than the sender or recipient, provide the FedEx Account Number. Specify this field when payment type is selected as SENDER.
     *
     * @return ShipV1FreightShipmentsPostBodyFreightRequestedShipmentCustomsClearanceDetailImporterOfRecordaccountNumber
     */
    public function getAccountNumber() : ShipV1FreightShipmentsPostBodyFreightRequestedShipmentCustomsClearanceDetailImporterOfRecordaccountNumber
    {
        return $this->accountNumber;
    }
    /**
     * Specify the assigned FedEx Account Number. If the transportation charges to be billed to a payor other than the sender or recipient, provide the FedEx Account Number. Specify this field when payment type is selected as SENDER.
     *
     * @param ShipV1FreightShipmentsPostBodyFreightRequestedShipmentCustomsClearanceDetailImporterOfRecordaccountNumber $accountNumber
     *
     * @return self
     */
    public function setAccountNumber(ShipV1FreightShipmentsPostBodyFreightRequestedShipmentCustomsClearanceDetailImporterOfRecordaccountNumber $accountNumber) : self
    {
        $this->initialized['accountNumber'] = true;
        $this->accountNumber = $accountNumber;
        return $this;
    }
    /**
     * This is the tax identification number details.
     *
     * @return list<ShipV1FreightShipmentsPostBodyFreightRequestedShipmentCustomsClearanceDetailImporterOfRecordtinsItem>
     */
    public function getTins() : array
    {
        return $this->tins;
    }
    /**
     * This is the tax identification number details.
     *
     * @param list<ShipV1FreightShipmentsPostBodyFreightRequestedShipmentCustomsClearanceDetailImporterOfRecordtinsItem> $tins
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
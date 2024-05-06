<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1FreightShipmentsPostBodyFreightRequestedShipmentRecipient extends \ArrayObject
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
     * @var ShipV1FreightShipmentsPostBodyFreightRequestedShipmentRecipientaddress
     */
    protected $address;
    /**
     * Indicate the contact details for this shipment.
     *
     * @var ShipV1FreightShipmentsPostBodyFreightRequestedShipmentRecipientcontact
     */
    protected $contact;
    /**
     * This is the tax identification number details. Used for adding the tax id.
     *
     * @var list<ShipV1FreightShipmentsPostBodyFreightRequestedShipmentRecipienttinsItem>
     */
    protected $tins;
    /**
     * Specify the delivery instructions to be added with the Freight shipment.
     *
     * @var string
     */
    protected $deliveryInstructions;
    /**
     * Specify detailed Billing Address information for above FedEx Freight Account Number. May be used as an actual physical address (place to which one could go), or as a container of address parts which should be handled as a unit (such as a city-state-ZIP combination within the US).
     *
     * @return ShipV1FreightShipmentsPostBodyFreightRequestedShipmentRecipientaddress
     */
    public function getAddress() : ShipV1FreightShipmentsPostBodyFreightRequestedShipmentRecipientaddress
    {
        return $this->address;
    }
    /**
     * Specify detailed Billing Address information for above FedEx Freight Account Number. May be used as an actual physical address (place to which one could go), or as a container of address parts which should be handled as a unit (such as a city-state-ZIP combination within the US).
     *
     * @param ShipV1FreightShipmentsPostBodyFreightRequestedShipmentRecipientaddress $address
     *
     * @return self
     */
    public function setAddress(ShipV1FreightShipmentsPostBodyFreightRequestedShipmentRecipientaddress $address) : self
    {
        $this->initialized['address'] = true;
        $this->address = $address;
        return $this;
    }
    /**
     * Indicate the contact details for this shipment.
     *
     * @return ShipV1FreightShipmentsPostBodyFreightRequestedShipmentRecipientcontact
     */
    public function getContact() : ShipV1FreightShipmentsPostBodyFreightRequestedShipmentRecipientcontact
    {
        return $this->contact;
    }
    /**
     * Indicate the contact details for this shipment.
     *
     * @param ShipV1FreightShipmentsPostBodyFreightRequestedShipmentRecipientcontact $contact
     *
     * @return self
     */
    public function setContact(ShipV1FreightShipmentsPostBodyFreightRequestedShipmentRecipientcontact $contact) : self
    {
        $this->initialized['contact'] = true;
        $this->contact = $contact;
        return $this;
    }
    /**
     * This is the tax identification number details. Used for adding the tax id.
     *
     * @return list<ShipV1FreightShipmentsPostBodyFreightRequestedShipmentRecipienttinsItem>
     */
    public function getTins() : array
    {
        return $this->tins;
    }
    /**
     * This is the tax identification number details. Used for adding the tax id.
     *
     * @param list<ShipV1FreightShipmentsPostBodyFreightRequestedShipmentRecipienttinsItem> $tins
     *
     * @return self
     */
    public function setTins(array $tins) : self
    {
        $this->initialized['tins'] = true;
        $this->tins = $tins;
        return $this;
    }
    /**
     * Specify the delivery instructions to be added with the Freight shipment.
     *
     * @return string
     */
    public function getDeliveryInstructions() : string
    {
        return $this->deliveryInstructions;
    }
    /**
     * Specify the delivery instructions to be added with the Freight shipment.
     *
     * @param string $deliveryInstructions
     *
     * @return self
     */
    public function setDeliveryInstructions(string $deliveryInstructions) : self
    {
        $this->initialized['deliveryInstructions'] = true;
        $this->deliveryInstructions = $deliveryInstructions;
        return $this;
    }
}
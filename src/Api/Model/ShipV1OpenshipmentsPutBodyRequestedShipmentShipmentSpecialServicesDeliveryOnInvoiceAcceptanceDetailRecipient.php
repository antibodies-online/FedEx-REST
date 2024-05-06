<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1OpenshipmentsPutBodyRequestedShipmentShipmentSpecialServicesDeliveryOnInvoiceAcceptanceDetailRecipient extends \ArrayObject
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
     * 
     *
     * @var ShipV1OpenshipmentsPutBodyRequestedShipmentShipmentSpecialServicesDeliveryOnInvoiceAcceptanceDetailRecipientaddress
     */
    protected $address;
    /**
     * 
     *
     * @var ShipV1OpenshipmentsPutBodyRequestedShipmentShipmentSpecialServicesDeliveryOnInvoiceAcceptanceDetailRecipientcontact
     */
    protected $contact;
    /**
     * This is the tax identification number details.
     *
     * @var list<ShipV1OpenshipmentsPutBodyRequestedShipmentShipmentSpecialServicesDeliveryOnInvoiceAcceptanceDetailRecipienttinsItem>
     */
    protected $tins;
    /**
     * Specify the delivery instructions to be added with the shipment. Use with Ground Home Delivery.<br>Example: Delivery Instructions
     *
     * @var string
     */
    protected $deliveryInstructions;
    /**
     * 
     *
     * @return ShipV1OpenshipmentsPutBodyRequestedShipmentShipmentSpecialServicesDeliveryOnInvoiceAcceptanceDetailRecipientaddress
     */
    public function getAddress() : ShipV1OpenshipmentsPutBodyRequestedShipmentShipmentSpecialServicesDeliveryOnInvoiceAcceptanceDetailRecipientaddress
    {
        return $this->address;
    }
    /**
     * 
     *
     * @param ShipV1OpenshipmentsPutBodyRequestedShipmentShipmentSpecialServicesDeliveryOnInvoiceAcceptanceDetailRecipientaddress $address
     *
     * @return self
     */
    public function setAddress(ShipV1OpenshipmentsPutBodyRequestedShipmentShipmentSpecialServicesDeliveryOnInvoiceAcceptanceDetailRecipientaddress $address) : self
    {
        $this->initialized['address'] = true;
        $this->address = $address;
        return $this;
    }
    /**
     * 
     *
     * @return ShipV1OpenshipmentsPutBodyRequestedShipmentShipmentSpecialServicesDeliveryOnInvoiceAcceptanceDetailRecipientcontact
     */
    public function getContact() : ShipV1OpenshipmentsPutBodyRequestedShipmentShipmentSpecialServicesDeliveryOnInvoiceAcceptanceDetailRecipientcontact
    {
        return $this->contact;
    }
    /**
     * 
     *
     * @param ShipV1OpenshipmentsPutBodyRequestedShipmentShipmentSpecialServicesDeliveryOnInvoiceAcceptanceDetailRecipientcontact $contact
     *
     * @return self
     */
    public function setContact(ShipV1OpenshipmentsPutBodyRequestedShipmentShipmentSpecialServicesDeliveryOnInvoiceAcceptanceDetailRecipientcontact $contact) : self
    {
        $this->initialized['contact'] = true;
        $this->contact = $contact;
        return $this;
    }
    /**
     * This is the tax identification number details.
     *
     * @return list<ShipV1OpenshipmentsPutBodyRequestedShipmentShipmentSpecialServicesDeliveryOnInvoiceAcceptanceDetailRecipienttinsItem>
     */
    public function getTins() : array
    {
        return $this->tins;
    }
    /**
     * This is the tax identification number details.
     *
     * @param list<ShipV1OpenshipmentsPutBodyRequestedShipmentShipmentSpecialServicesDeliveryOnInvoiceAcceptanceDetailRecipienttinsItem> $tins
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
     * Specify the delivery instructions to be added with the shipment. Use with Ground Home Delivery.<br>Example: Delivery Instructions
     *
     * @return string
     */
    public function getDeliveryInstructions() : string
    {
        return $this->deliveryInstructions;
    }
    /**
     * Specify the delivery instructions to be added with the shipment. Use with Ground Home Delivery.<br>Example: Delivery Instructions
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
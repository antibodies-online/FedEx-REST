<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1OpenshipmentsCreatePostBodyRequestedShipmentShipmentSpecialServicesDeliveryOnInvoiceAcceptanceDetailRecipient extends \ArrayObject
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
     * @var ShipV1OpenshipmentsCreatePostBodyRequestedShipmentShipmentSpecialServicesDeliveryOnInvoiceAcceptanceDetailRecipientaddress
     */
    protected $address;
    /**
     * 
     *
     * @var ShipV1OpenshipmentsCreatePostBodyRequestedShipmentShipmentSpecialServicesDeliveryOnInvoiceAcceptanceDetailRecipientcontact
     */
    protected $contact;
    /**
     * This is the tax identification number details.
     *
     * @var list<ShipV1OpenshipmentsCreatePostBodyRequestedShipmentShipmentSpecialServicesDeliveryOnInvoiceAcceptanceDetailRecipienttinsItem>
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
     * @return ShipV1OpenshipmentsCreatePostBodyRequestedShipmentShipmentSpecialServicesDeliveryOnInvoiceAcceptanceDetailRecipientaddress
     */
    public function getAddress() : ShipV1OpenshipmentsCreatePostBodyRequestedShipmentShipmentSpecialServicesDeliveryOnInvoiceAcceptanceDetailRecipientaddress
    {
        return $this->address;
    }
    /**
     * 
     *
     * @param ShipV1OpenshipmentsCreatePostBodyRequestedShipmentShipmentSpecialServicesDeliveryOnInvoiceAcceptanceDetailRecipientaddress $address
     *
     * @return self
     */
    public function setAddress(ShipV1OpenshipmentsCreatePostBodyRequestedShipmentShipmentSpecialServicesDeliveryOnInvoiceAcceptanceDetailRecipientaddress $address) : self
    {
        $this->initialized['address'] = true;
        $this->address = $address;
        return $this;
    }
    /**
     * 
     *
     * @return ShipV1OpenshipmentsCreatePostBodyRequestedShipmentShipmentSpecialServicesDeliveryOnInvoiceAcceptanceDetailRecipientcontact
     */
    public function getContact() : ShipV1OpenshipmentsCreatePostBodyRequestedShipmentShipmentSpecialServicesDeliveryOnInvoiceAcceptanceDetailRecipientcontact
    {
        return $this->contact;
    }
    /**
     * 
     *
     * @param ShipV1OpenshipmentsCreatePostBodyRequestedShipmentShipmentSpecialServicesDeliveryOnInvoiceAcceptanceDetailRecipientcontact $contact
     *
     * @return self
     */
    public function setContact(ShipV1OpenshipmentsCreatePostBodyRequestedShipmentShipmentSpecialServicesDeliveryOnInvoiceAcceptanceDetailRecipientcontact $contact) : self
    {
        $this->initialized['contact'] = true;
        $this->contact = $contact;
        return $this;
    }
    /**
     * This is the tax identification number details.
     *
     * @return list<ShipV1OpenshipmentsCreatePostBodyRequestedShipmentShipmentSpecialServicesDeliveryOnInvoiceAcceptanceDetailRecipienttinsItem>
     */
    public function getTins() : array
    {
        return $this->tins;
    }
    /**
     * This is the tax identification number details.
     *
     * @param list<ShipV1OpenshipmentsCreatePostBodyRequestedShipmentShipmentSpecialServicesDeliveryOnInvoiceAcceptanceDetailRecipienttinsItem> $tins
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
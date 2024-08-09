<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1ShipmentsPostBodyRequestedShipmentShipmentSpecialServicesDeliveryOnInvoiceAcceptanceDetailRecipient extends \ArrayObject
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
     * 
     *
     * @var ShipV1ShipmentsPostBodyRequestedShipmentShipmentSpecialServicesDeliveryOnInvoiceAcceptanceDetailRecipientaddress
     */
    protected $address;
    /**
     * 
     *
     * @var ShipV1ShipmentsPostBodyRequestedShipmentShipmentSpecialServicesDeliveryOnInvoiceAcceptanceDetailRecipientcontact
     */
    protected $contact;
    /**
     * This is the tax identification number details.
     *
     * @var list<ShipV1ShipmentsPostBodyRequestedShipmentShipmentSpecialServicesDeliveryOnInvoiceAcceptanceDetailRecipienttinsItem>
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
     * @return ShipV1ShipmentsPostBodyRequestedShipmentShipmentSpecialServicesDeliveryOnInvoiceAcceptanceDetailRecipientaddress
     */
    public function getAddress(): ShipV1ShipmentsPostBodyRequestedShipmentShipmentSpecialServicesDeliveryOnInvoiceAcceptanceDetailRecipientaddress
    {
        return $this->address;
    }
    /**
     * 
     *
     * @param ShipV1ShipmentsPostBodyRequestedShipmentShipmentSpecialServicesDeliveryOnInvoiceAcceptanceDetailRecipientaddress $address
     *
     * @return self
     */
    public function setAddress(ShipV1ShipmentsPostBodyRequestedShipmentShipmentSpecialServicesDeliveryOnInvoiceAcceptanceDetailRecipientaddress $address): self
    {
        $this->initialized['address'] = true;
        $this->address = $address;
        return $this;
    }
    /**
     * 
     *
     * @return ShipV1ShipmentsPostBodyRequestedShipmentShipmentSpecialServicesDeliveryOnInvoiceAcceptanceDetailRecipientcontact
     */
    public function getContact(): ShipV1ShipmentsPostBodyRequestedShipmentShipmentSpecialServicesDeliveryOnInvoiceAcceptanceDetailRecipientcontact
    {
        return $this->contact;
    }
    /**
     * 
     *
     * @param ShipV1ShipmentsPostBodyRequestedShipmentShipmentSpecialServicesDeliveryOnInvoiceAcceptanceDetailRecipientcontact $contact
     *
     * @return self
     */
    public function setContact(ShipV1ShipmentsPostBodyRequestedShipmentShipmentSpecialServicesDeliveryOnInvoiceAcceptanceDetailRecipientcontact $contact): self
    {
        $this->initialized['contact'] = true;
        $this->contact = $contact;
        return $this;
    }
    /**
     * This is the tax identification number details.
     *
     * @return list<ShipV1ShipmentsPostBodyRequestedShipmentShipmentSpecialServicesDeliveryOnInvoiceAcceptanceDetailRecipienttinsItem>
     */
    public function getTins(): array
    {
        return $this->tins;
    }
    /**
     * This is the tax identification number details.
     *
     * @param list<ShipV1ShipmentsPostBodyRequestedShipmentShipmentSpecialServicesDeliveryOnInvoiceAcceptanceDetailRecipienttinsItem> $tins
     *
     * @return self
     */
    public function setTins(array $tins): self
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
    public function getDeliveryInstructions(): string
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
    public function setDeliveryInstructions(string $deliveryInstructions): self
    {
        $this->initialized['deliveryInstructions'] = true;
        $this->deliveryInstructions = $deliveryInstructions;
        return $this;
    }
}
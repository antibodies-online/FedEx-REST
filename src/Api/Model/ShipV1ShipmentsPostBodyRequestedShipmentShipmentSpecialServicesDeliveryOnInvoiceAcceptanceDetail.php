<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1ShipmentsPostBodyRequestedShipmentShipmentSpecialServicesDeliveryOnInvoiceAcceptanceDetail extends \ArrayObject
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
     * The descriptive data for the recipient of the shipment and the physical location for the shipment destination.
     *
     * @var ShipV1ShipmentsPostBodyRequestedShipmentShipmentSpecialServicesDeliveryOnInvoiceAcceptanceDetailRecipient
     */
    protected $recipient;
    /**
     * The descriptive data for the recipient of the shipment and the physical location for the shipment destination.
     *
     * @return ShipV1ShipmentsPostBodyRequestedShipmentShipmentSpecialServicesDeliveryOnInvoiceAcceptanceDetailRecipient
     */
    public function getRecipient() : ShipV1ShipmentsPostBodyRequestedShipmentShipmentSpecialServicesDeliveryOnInvoiceAcceptanceDetailRecipient
    {
        return $this->recipient;
    }
    /**
     * The descriptive data for the recipient of the shipment and the physical location for the shipment destination.
     *
     * @param ShipV1ShipmentsPostBodyRequestedShipmentShipmentSpecialServicesDeliveryOnInvoiceAcceptanceDetailRecipient $recipient
     *
     * @return self
     */
    public function setRecipient(ShipV1ShipmentsPostBodyRequestedShipmentShipmentSpecialServicesDeliveryOnInvoiceAcceptanceDetailRecipient $recipient) : self
    {
        $this->initialized['recipient'] = true;
        $this->recipient = $recipient;
        return $this;
    }
}
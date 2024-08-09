<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShipmentSpecialServicesDeliveryOnInvoiceAcceptanceDetail extends \ArrayObject
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
     * The descriptive data for the recipient of the shipment and the physical location for the shipment destination.
     *
     * @var ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShipmentSpecialServicesDeliveryOnInvoiceAcceptanceDetailRecipient
     */
    protected $recipient;
    /**
     * The descriptive data for the recipient of the shipment and the physical location for the shipment destination.
     *
     * @return ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShipmentSpecialServicesDeliveryOnInvoiceAcceptanceDetailRecipient
     */
    public function getRecipient(): ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShipmentSpecialServicesDeliveryOnInvoiceAcceptanceDetailRecipient
    {
        return $this->recipient;
    }
    /**
     * The descriptive data for the recipient of the shipment and the physical location for the shipment destination.
     *
     * @param ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShipmentSpecialServicesDeliveryOnInvoiceAcceptanceDetailRecipient $recipient
     *
     * @return self
     */
    public function setRecipient(ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentShipmentSpecialServicesDeliveryOnInvoiceAcceptanceDetailRecipient $recipient): self
    {
        $this->initialized['recipient'] = true;
        $this->recipient = $recipient;
        return $this;
    }
}
<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentCustomsClearanceDetailBrokersItem extends \ArrayObject
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
     * These are broker details for the shipment with physical address, contact and account number information.
     *
     * @var ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentCustomsClearanceDetailBrokersItemBroker
     */
    protected $broker;
    /**
     * Identifies the type of broker.
     *
     * @var string
     */
    protected $type;
    /**
     * These are broker details for the shipment with physical address, contact and account number information.
     *
     * @return ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentCustomsClearanceDetailBrokersItemBroker
     */
    public function getBroker(): ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentCustomsClearanceDetailBrokersItemBroker
    {
        return $this->broker;
    }
    /**
     * These are broker details for the shipment with physical address, contact and account number information.
     *
     * @param ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentCustomsClearanceDetailBrokersItemBroker $broker
     *
     * @return self
     */
    public function setBroker(ShipV1ShipmentsPackagesValidatePostBodyRequestedShipmentCustomsClearanceDetailBrokersItemBroker $broker): self
    {
        $this->initialized['broker'] = true;
        $this->broker = $broker;
        return $this;
    }
    /**
     * Identifies the type of broker.
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * Identifies the type of broker.
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
}
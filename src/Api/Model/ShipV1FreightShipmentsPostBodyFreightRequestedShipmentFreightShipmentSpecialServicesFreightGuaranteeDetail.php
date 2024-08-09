<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentSpecialServicesFreightGuaranteeDetail extends \ArrayObject
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
     * Specify how the freight has been guaranteed for delivery.
     *
     * @var string
     */
    protected $freightGuaranteeType;
    /**
     * Specify the time of shipment based on shippers time zone.<br>Example: 2009-04-12
     *
     * @var string
     */
    protected $guaranteeTimestamp;
    /**
     * Specify how the freight has been guaranteed for delivery.
     *
     * @return string
     */
    public function getFreightGuaranteeType(): string
    {
        return $this->freightGuaranteeType;
    }
    /**
     * Specify how the freight has been guaranteed for delivery.
     *
     * @param string $freightGuaranteeType
     *
     * @return self
     */
    public function setFreightGuaranteeType(string $freightGuaranteeType): self
    {
        $this->initialized['freightGuaranteeType'] = true;
        $this->freightGuaranteeType = $freightGuaranteeType;
        return $this;
    }
    /**
     * Specify the time of shipment based on shippers time zone.<br>Example: 2009-04-12
     *
     * @return string
     */
    public function getGuaranteeTimestamp(): string
    {
        return $this->guaranteeTimestamp;
    }
    /**
     * Specify the time of shipment based on shippers time zone.<br>Example: 2009-04-12
     *
     * @param string $guaranteeTimestamp
     *
     * @return self
     */
    public function setGuaranteeTimestamp(string $guaranteeTimestamp): self
    {
        $this->initialized['guaranteeTimestamp'] = true;
        $this->guaranteeTimestamp = $guaranteeTimestamp;
        return $this;
    }
}
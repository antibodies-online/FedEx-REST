<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentSpecialServicesCustomDeliveryWindowDetail extends \ArrayObject
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
     * Indicates the date requested. Only used if Type is ON, BEFORE or AFTER<br>Example: 2023-05-15
     *
     * @var string
     */
    protected $requestDate;
    /**
     * Indicates the time requested.<br>Example: 10:00:00
     *
     * @var string
     */
    protected $requestTime;
    /**
     * Range of dates for custom delivery request.Only used if type is BETWEEN.
     *
     * @var ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentSpecialServicesCustomDeliveryWindowDetailRequestRange
     */
    protected $requestRange;
    /**
     * Indicates the type of shipment.<br>Example: AFTER
     *
     * @var string
     */
    protected $type;
    /**
     * Indicates the date requested. Only used if Type is ON, BEFORE or AFTER<br>Example: 2023-05-15
     *
     * @return string
     */
    public function getRequestDate() : string
    {
        return $this->requestDate;
    }
    /**
     * Indicates the date requested. Only used if Type is ON, BEFORE or AFTER<br>Example: 2023-05-15
     *
     * @param string $requestDate
     *
     * @return self
     */
    public function setRequestDate(string $requestDate) : self
    {
        $this->initialized['requestDate'] = true;
        $this->requestDate = $requestDate;
        return $this;
    }
    /**
     * Indicates the time requested.<br>Example: 10:00:00
     *
     * @return string
     */
    public function getRequestTime() : string
    {
        return $this->requestTime;
    }
    /**
     * Indicates the time requested.<br>Example: 10:00:00
     *
     * @param string $requestTime
     *
     * @return self
     */
    public function setRequestTime(string $requestTime) : self
    {
        $this->initialized['requestTime'] = true;
        $this->requestTime = $requestTime;
        return $this;
    }
    /**
     * Range of dates for custom delivery request.Only used if type is BETWEEN.
     *
     * @return ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentSpecialServicesCustomDeliveryWindowDetailRequestRange
     */
    public function getRequestRange() : ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentSpecialServicesCustomDeliveryWindowDetailRequestRange
    {
        return $this->requestRange;
    }
    /**
     * Range of dates for custom delivery request.Only used if type is BETWEEN.
     *
     * @param ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentSpecialServicesCustomDeliveryWindowDetailRequestRange $requestRange
     *
     * @return self
     */
    public function setRequestRange(ShipV1FreightShipmentsPostBodyFreightRequestedShipmentFreightShipmentSpecialServicesCustomDeliveryWindowDetailRequestRange $requestRange) : self
    {
        $this->initialized['requestRange'] = true;
        $this->requestRange = $requestRange;
        return $this;
    }
    /**
     * Indicates the type of shipment.<br>Example: AFTER
     *
     * @return string
     */
    public function getType() : string
    {
        return $this->type;
    }
    /**
     * Indicates the type of shipment.<br>Example: AFTER
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type) : self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
}
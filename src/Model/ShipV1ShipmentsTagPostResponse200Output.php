<?php

namespace AntibodiesOnline\FedEx\Model;

class ShipV1ShipmentsTagPostResponse200Output extends \ArrayObject
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
     * Specifies the Master Tracking Number for the requested shipment.<br>Example: 997338100007320
     *
     * @var string
     */
    protected $masterTrackingNumber;
    /**
     * Specifies the service type for this shipment.<br>Example: GROUND_HOME_DELIVERY<br><a onclick='loadDocReference("servicetypes")'>Click here to see Service Types</a>
     *
     * @var string
     */
    protected $serviceType;
    /**
     * Specifies the shipment date and time. The default timestamp is the current date-time. Format is MMM-dd-yyyy.<br>Example: 2019-10-04
     *
     * @var string
     */
    protected $shipTimestamp;
    /**
     * Specifies the pickup confirmation and location details for the return tag shipment.
     *
     * @var ShipV1ShipmentsTagPostResponse200OutputCompletedTagDetail
     */
    protected $completedTagDetail;
    /**
     * Specifies the alerts received when a tag is created. This includes the alert code, alert type, and alert message.
     *
     * @var list<ShipV1ShipmentsTagPostResponse200OutputAlertsItem>
     */
    protected $alerts;
    /**
     * Specifies the Master Tracking Number for the requested shipment.<br>Example: 997338100007320
     *
     * @return string
     */
    public function getMasterTrackingNumber() : string
    {
        return $this->masterTrackingNumber;
    }
    /**
     * Specifies the Master Tracking Number for the requested shipment.<br>Example: 997338100007320
     *
     * @param string $masterTrackingNumber
     *
     * @return self
     */
    public function setMasterTrackingNumber(string $masterTrackingNumber) : self
    {
        $this->initialized['masterTrackingNumber'] = true;
        $this->masterTrackingNumber = $masterTrackingNumber;
        return $this;
    }
    /**
     * Specifies the service type for this shipment.<br>Example: GROUND_HOME_DELIVERY<br><a onclick='loadDocReference("servicetypes")'>Click here to see Service Types</a>
     *
     * @return string
     */
    public function getServiceType() : string
    {
        return $this->serviceType;
    }
    /**
     * Specifies the service type for this shipment.<br>Example: GROUND_HOME_DELIVERY<br><a onclick='loadDocReference("servicetypes")'>Click here to see Service Types</a>
     *
     * @param string $serviceType
     *
     * @return self
     */
    public function setServiceType(string $serviceType) : self
    {
        $this->initialized['serviceType'] = true;
        $this->serviceType = $serviceType;
        return $this;
    }
    /**
     * Specifies the shipment date and time. The default timestamp is the current date-time. Format is MMM-dd-yyyy.<br>Example: 2019-10-04
     *
     * @return string
     */
    public function getShipTimestamp() : string
    {
        return $this->shipTimestamp;
    }
    /**
     * Specifies the shipment date and time. The default timestamp is the current date-time. Format is MMM-dd-yyyy.<br>Example: 2019-10-04
     *
     * @param string $shipTimestamp
     *
     * @return self
     */
    public function setShipTimestamp(string $shipTimestamp) : self
    {
        $this->initialized['shipTimestamp'] = true;
        $this->shipTimestamp = $shipTimestamp;
        return $this;
    }
    /**
     * Specifies the pickup confirmation and location details for the return tag shipment.
     *
     * @return ShipV1ShipmentsTagPostResponse200OutputCompletedTagDetail
     */
    public function getCompletedTagDetail() : ShipV1ShipmentsTagPostResponse200OutputCompletedTagDetail
    {
        return $this->completedTagDetail;
    }
    /**
     * Specifies the pickup confirmation and location details for the return tag shipment.
     *
     * @param ShipV1ShipmentsTagPostResponse200OutputCompletedTagDetail $completedTagDetail
     *
     * @return self
     */
    public function setCompletedTagDetail(ShipV1ShipmentsTagPostResponse200OutputCompletedTagDetail $completedTagDetail) : self
    {
        $this->initialized['completedTagDetail'] = true;
        $this->completedTagDetail = $completedTagDetail;
        return $this;
    }
    /**
     * Specifies the alerts received when a tag is created. This includes the alert code, alert type, and alert message.
     *
     * @return list<ShipV1ShipmentsTagPostResponse200OutputAlertsItem>
     */
    public function getAlerts() : array
    {
        return $this->alerts;
    }
    /**
     * Specifies the alerts received when a tag is created. This includes the alert code, alert type, and alert message.
     *
     * @param list<ShipV1ShipmentsTagPostResponse200OutputAlertsItem> $alerts
     *
     * @return self
     */
    public function setAlerts(array $alerts) : self
    {
        $this->initialized['alerts'] = true;
        $this->alerts = $alerts;
        return $this;
    }
}
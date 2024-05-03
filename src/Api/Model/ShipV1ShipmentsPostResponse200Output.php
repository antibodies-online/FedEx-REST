<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1ShipmentsPostResponse200Output extends \ArrayObject
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
     * These are shipping transaction details, such as master tracking number, service type, and ship date and time.
     *
     * @var list<ShipV1ShipmentsPostResponse200OutputTransactionShipmentsItem>
     */
    protected $transactionShipments;
    /**
     * The alerts received when processing a shipment request.
     *
     * @var list<ShipV1ShipmentsPostResponse200OutputAlertsItem>
     */
    protected $alerts;
    /**
     * Unique identifier for a Job. Example: abc123456
     *
     * @var string
     */
    protected $jobId;
    /**
     * These are shipping transaction details, such as master tracking number, service type, and ship date and time.
     *
     * @return list<ShipV1ShipmentsPostResponse200OutputTransactionShipmentsItem>
     */
    public function getTransactionShipments() : array
    {
        return $this->transactionShipments;
    }
    /**
     * These are shipping transaction details, such as master tracking number, service type, and ship date and time.
     *
     * @param list<ShipV1ShipmentsPostResponse200OutputTransactionShipmentsItem> $transactionShipments
     *
     * @return self
     */
    public function setTransactionShipments(array $transactionShipments) : self
    {
        $this->initialized['transactionShipments'] = true;
        $this->transactionShipments = $transactionShipments;
        return $this;
    }
    /**
     * The alerts received when processing a shipment request.
     *
     * @return list<ShipV1ShipmentsPostResponse200OutputAlertsItem>
     */
    public function getAlerts() : array
    {
        return $this->alerts;
    }
    /**
     * The alerts received when processing a shipment request.
     *
     * @param list<ShipV1ShipmentsPostResponse200OutputAlertsItem> $alerts
     *
     * @return self
     */
    public function setAlerts(array $alerts) : self
    {
        $this->initialized['alerts'] = true;
        $this->alerts = $alerts;
        return $this;
    }
    /**
     * Unique identifier for a Job. Example: abc123456
     *
     * @return string
     */
    public function getJobId() : string
    {
        return $this->jobId;
    }
    /**
     * Unique identifier for a Job. Example: abc123456
     *
     * @param string $jobId
     *
     * @return self
     */
    public function setJobId(string $jobId) : self
    {
        $this->initialized['jobId'] = true;
        $this->jobId = $jobId;
        return $this;
    }
}
<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1OpenshipmentsPostResponse200Output extends \ArrayObject
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
     * Indicates the job under which the deferred shipment artifacts must be identified in the subsequent retrieval request. Example: abc123456
     *
     * @var string
     */
    protected $jobId;
    /**
     * These are shipping transaction details, such as master tracking number, service type, and ship date and time.
     *
     * @var list<ShipV1OpenshipmentsPostResponse200OutputTransactionShipmentsItem>
     */
    protected $transactionShipments;
    /**
     * The alerts details received in the response.
     *
     * @var list<ShipV1OpenshipmentsPostResponse200OutputAlertsItem>
     */
    protected $alerts;
    /**
     * Indicates the job under which the deferred shipment artifacts must be identified in the subsequent retrieval request. Example: abc123456
     *
     * @return string
     */
    public function getJobId(): string
    {
        return $this->jobId;
    }
    /**
     * Indicates the job under which the deferred shipment artifacts must be identified in the subsequent retrieval request. Example: abc123456
     *
     * @param string $jobId
     *
     * @return self
     */
    public function setJobId(string $jobId): self
    {
        $this->initialized['jobId'] = true;
        $this->jobId = $jobId;
        return $this;
    }
    /**
     * These are shipping transaction details, such as master tracking number, service type, and ship date and time.
     *
     * @return list<ShipV1OpenshipmentsPostResponse200OutputTransactionShipmentsItem>
     */
    public function getTransactionShipments(): array
    {
        return $this->transactionShipments;
    }
    /**
     * These are shipping transaction details, such as master tracking number, service type, and ship date and time.
     *
     * @param list<ShipV1OpenshipmentsPostResponse200OutputTransactionShipmentsItem> $transactionShipments
     *
     * @return self
     */
    public function setTransactionShipments(array $transactionShipments): self
    {
        $this->initialized['transactionShipments'] = true;
        $this->transactionShipments = $transactionShipments;
        return $this;
    }
    /**
     * The alerts details received in the response.
     *
     * @return list<ShipV1OpenshipmentsPostResponse200OutputAlertsItem>
     */
    public function getAlerts(): array
    {
        return $this->alerts;
    }
    /**
     * The alerts details received in the response.
     *
     * @param list<ShipV1OpenshipmentsPostResponse200OutputAlertsItem> $alerts
     *
     * @return self
     */
    public function setAlerts(array $alerts): self
    {
        $this->initialized['alerts'] = true;
        $this->alerts = $alerts;
        return $this;
    }
}
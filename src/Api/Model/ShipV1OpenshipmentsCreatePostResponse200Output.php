<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1OpenshipmentsCreatePostResponse200Output extends \ArrayObject
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
    * This field describes how the the shipment is processed.
     Example: SYNCHRONOUSLY_PROCESSED
    *
    * @var string
    */
    protected $asynchronousProcessingResultsDetail;
    /**
     * Unique identifier for a Job. Example: abc123456
     *
     * @var string
     */
    protected $jobId;
    /**
     * The shipping transaction details, such as master tracking number, service type, and ship timestamp.
     *
     * @var list<ShipV1OpenshipmentsCreatePostResponse200OutputTransactionShipmentsItem>
     */
    protected $transactionShipments;
    /**
     * The alerts details received in the response.
     *
     * @var list<ShipV1OpenshipmentsCreatePostResponse200OutputAlertsItem>
     */
    protected $alerts;
    /**
    * This field describes how the the shipment is processed.
     Example: SYNCHRONOUSLY_PROCESSED
    *
    * @return string
    */
    public function getAsynchronousProcessingResultsDetail(): string
    {
        return $this->asynchronousProcessingResultsDetail;
    }
    /**
    * This field describes how the the shipment is processed.
     Example: SYNCHRONOUSLY_PROCESSED
    *
    * @param string $asynchronousProcessingResultsDetail
    *
    * @return self
    */
    public function setAsynchronousProcessingResultsDetail(string $asynchronousProcessingResultsDetail): self
    {
        $this->initialized['asynchronousProcessingResultsDetail'] = true;
        $this->asynchronousProcessingResultsDetail = $asynchronousProcessingResultsDetail;
        return $this;
    }
    /**
     * Unique identifier for a Job. Example: abc123456
     *
     * @return string
     */
    public function getJobId(): string
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
    public function setJobId(string $jobId): self
    {
        $this->initialized['jobId'] = true;
        $this->jobId = $jobId;
        return $this;
    }
    /**
     * The shipping transaction details, such as master tracking number, service type, and ship timestamp.
     *
     * @return list<ShipV1OpenshipmentsCreatePostResponse200OutputTransactionShipmentsItem>
     */
    public function getTransactionShipments(): array
    {
        return $this->transactionShipments;
    }
    /**
     * The shipping transaction details, such as master tracking number, service type, and ship timestamp.
     *
     * @param list<ShipV1OpenshipmentsCreatePostResponse200OutputTransactionShipmentsItem> $transactionShipments
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
     * @return list<ShipV1OpenshipmentsCreatePostResponse200OutputAlertsItem>
     */
    public function getAlerts(): array
    {
        return $this->alerts;
    }
    /**
     * The alerts details received in the response.
     *
     * @param list<ShipV1OpenshipmentsCreatePostResponse200OutputAlertsItem> $alerts
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
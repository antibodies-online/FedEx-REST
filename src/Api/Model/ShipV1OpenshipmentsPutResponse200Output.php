<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1OpenshipmentsPutResponse200Output extends \ArrayObject
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
     *  This field describes how the the shipment is processed.<br>Example: SYNCHRONOUSLY_PROCESSED
     *
     * @var string
     */
    protected $asynchronousProcessingResultsDetail;
    /**
    * Indicates the job under which the deferred shipment artifacts must be identified in the subsequent retrieval request.
    Example: abc123456
    *
    * @var string
    */
    protected $jobId;
    /**
     * These are output transaction details.
     *
     * @var list<ShipV1OpenshipmentsPutResponse200OutputTransactionShipmentsItem>
     */
    protected $transactionShipments;
    /**
     * The alerts details received in the response.
     *
     * @var list<ShipV1OpenshipmentsPutResponse200OutputAlertsItem>
     */
    protected $alerts;
    /**
     *  This field describes how the the shipment is processed.<br>Example: SYNCHRONOUSLY_PROCESSED
     *
     * @return string
     */
    public function getAsynchronousProcessingResultsDetail(): string
    {
        return $this->asynchronousProcessingResultsDetail;
    }
    /**
     *  This field describes how the the shipment is processed.<br>Example: SYNCHRONOUSLY_PROCESSED
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
    * Indicates the job under which the deferred shipment artifacts must be identified in the subsequent retrieval request.
    Example: abc123456
    *
    * @return string
    */
    public function getJobId(): string
    {
        return $this->jobId;
    }
    /**
    * Indicates the job under which the deferred shipment artifacts must be identified in the subsequent retrieval request.
    Example: abc123456
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
     * These are output transaction details.
     *
     * @return list<ShipV1OpenshipmentsPutResponse200OutputTransactionShipmentsItem>
     */
    public function getTransactionShipments(): array
    {
        return $this->transactionShipments;
    }
    /**
     * These are output transaction details.
     *
     * @param list<ShipV1OpenshipmentsPutResponse200OutputTransactionShipmentsItem> $transactionShipments
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
     * @return list<ShipV1OpenshipmentsPutResponse200OutputAlertsItem>
     */
    public function getAlerts(): array
    {
        return $this->alerts;
    }
    /**
     * The alerts details received in the response.
     *
     * @param list<ShipV1OpenshipmentsPutResponse200OutputAlertsItem> $alerts
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
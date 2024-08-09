<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1ShipmentsResultsPostBody extends \ArrayObject
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
     * This is FedEx Account number details.
     *
     * @var ShipV1ShipmentsResultsPostBodyAccountNumber
     */
    protected $accountNumber;
    /**
     * Indicates the job under which the deferred shipment artifacts must be identified in the subsequent retrieval request. <br> Example: 89sxxxxx233ae24ff31xxxxx
     *
     * @var string
     */
    protected $jobId;
    /**
     * This is FedEx Account number details.
     *
     * @return ShipV1ShipmentsResultsPostBodyAccountNumber
     */
    public function getAccountNumber(): ShipV1ShipmentsResultsPostBodyAccountNumber
    {
        return $this->accountNumber;
    }
    /**
     * This is FedEx Account number details.
     *
     * @param ShipV1ShipmentsResultsPostBodyAccountNumber $accountNumber
     *
     * @return self
     */
    public function setAccountNumber(ShipV1ShipmentsResultsPostBodyAccountNumber $accountNumber): self
    {
        $this->initialized['accountNumber'] = true;
        $this->accountNumber = $accountNumber;
        return $this;
    }
    /**
     * Indicates the job under which the deferred shipment artifacts must be identified in the subsequent retrieval request. <br> Example: 89sxxxxx233ae24ff31xxxxx
     *
     * @return string
     */
    public function getJobId(): string
    {
        return $this->jobId;
    }
    /**
     * Indicates the job under which the deferred shipment artifacts must be identified in the subsequent retrieval request. <br> Example: 89sxxxxx233ae24ff31xxxxx
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
}
<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1OpenshipmentsPackagesDeletePutResponse200 extends \ArrayObject
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
     * The transaction ID is a special set of numbers that defines each transaction.<br>Example: 624xxxxx-b709-470c-8c39-4b55112xxxxx
     *
     * @var string
     */
    protected $transactionId;
    /**
     * This element allows you to assign a unique identifier to your transaction. This element is also returned in the reply and helps you match the request to the reply. <br> Example: 624xxxxx-b709-470c-8c39-4b55112xxxxx
     *
     * @var string
     */
    protected $customerTransactionId;
    /**
     * 
     *
     * @var ShipV1OpenshipmentsPackagesDeletePutResponse200Output
     */
    protected $output;
    /**
     * The transaction ID is a special set of numbers that defines each transaction.<br>Example: 624xxxxx-b709-470c-8c39-4b55112xxxxx
     *
     * @return string
     */
    public function getTransactionId(): string
    {
        return $this->transactionId;
    }
    /**
     * The transaction ID is a special set of numbers that defines each transaction.<br>Example: 624xxxxx-b709-470c-8c39-4b55112xxxxx
     *
     * @param string $transactionId
     *
     * @return self
     */
    public function setTransactionId(string $transactionId): self
    {
        $this->initialized['transactionId'] = true;
        $this->transactionId = $transactionId;
        return $this;
    }
    /**
     * This element allows you to assign a unique identifier to your transaction. This element is also returned in the reply and helps you match the request to the reply. <br> Example: 624xxxxx-b709-470c-8c39-4b55112xxxxx
     *
     * @return string
     */
    public function getCustomerTransactionId(): string
    {
        return $this->customerTransactionId;
    }
    /**
     * This element allows you to assign a unique identifier to your transaction. This element is also returned in the reply and helps you match the request to the reply. <br> Example: 624xxxxx-b709-470c-8c39-4b55112xxxxx
     *
     * @param string $customerTransactionId
     *
     * @return self
     */
    public function setCustomerTransactionId(string $customerTransactionId): self
    {
        $this->initialized['customerTransactionId'] = true;
        $this->customerTransactionId = $customerTransactionId;
        return $this;
    }
    /**
     * 
     *
     * @return ShipV1OpenshipmentsPackagesDeletePutResponse200Output
     */
    public function getOutput(): ShipV1OpenshipmentsPackagesDeletePutResponse200Output
    {
        return $this->output;
    }
    /**
     * 
     *
     * @param ShipV1OpenshipmentsPackagesDeletePutResponse200Output $output
     *
     * @return self
     */
    public function setOutput(ShipV1OpenshipmentsPackagesDeletePutResponse200Output $output): self
    {
        $this->initialized['output'] = true;
        $this->output = $output;
        return $this;
    }
}
<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1ShipmentsResultsPostResponse200 extends \ArrayObject
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
     * This is a unique identifier to your transaction and helps you match the request to the reply. <br> Example: AnyCo_order123456789
     *
     * @var string
     */
    protected $customerTransactionId;
    /**
     * 
     *
     * @var ShipV1ShipmentsResultsPostResponse200Output
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
     * This is a unique identifier to your transaction and helps you match the request to the reply. <br> Example: AnyCo_order123456789
     *
     * @return string
     */
    public function getCustomerTransactionId(): string
    {
        return $this->customerTransactionId;
    }
    /**
     * This is a unique identifier to your transaction and helps you match the request to the reply. <br> Example: AnyCo_order123456789
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
     * @return ShipV1ShipmentsResultsPostResponse200Output
     */
    public function getOutput(): ShipV1ShipmentsResultsPostResponse200Output
    {
        return $this->output;
    }
    /**
     * 
     *
     * @param ShipV1ShipmentsResultsPostResponse200Output $output
     *
     * @return self
     */
    public function setOutput(ShipV1ShipmentsResultsPostResponse200Output $output): self
    {
        $this->initialized['output'] = true;
        $this->output = $output;
        return $this;
    }
}
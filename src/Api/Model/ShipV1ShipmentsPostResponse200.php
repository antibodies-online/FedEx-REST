<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1ShipmentsPostResponse200 extends \ArrayObject
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
     * The transaction ID is a special set of numbers that defines each transaction.<br>Example: 624deea6-b709-470c-8c39-4b5511281492
     *
     * @var string
     */
    protected $transactionId;
    /**
     * This element has a unique identifier added in your request, helps you match the request to the reply.<br>Example: XXXX_XXX123XXXXX
     *
     * @var string
     */
    protected $customerTransactionId;
    /**
     * This is the response received when a shipment is requested.
     *
     * @var ShipV1ShipmentsPostResponse200Output
     */
    protected $output;
    /**
     * The transaction ID is a special set of numbers that defines each transaction.<br>Example: 624deea6-b709-470c-8c39-4b5511281492
     *
     * @return string
     */
    public function getTransactionId() : string
    {
        return $this->transactionId;
    }
    /**
     * The transaction ID is a special set of numbers that defines each transaction.<br>Example: 624deea6-b709-470c-8c39-4b5511281492
     *
     * @param string $transactionId
     *
     * @return self
     */
    public function setTransactionId(string $transactionId) : self
    {
        $this->initialized['transactionId'] = true;
        $this->transactionId = $transactionId;
        return $this;
    }
    /**
     * This element has a unique identifier added in your request, helps you match the request to the reply.<br>Example: XXXX_XXX123XXXXX
     *
     * @return string
     */
    public function getCustomerTransactionId() : string
    {
        return $this->customerTransactionId;
    }
    /**
     * This element has a unique identifier added in your request, helps you match the request to the reply.<br>Example: XXXX_XXX123XXXXX
     *
     * @param string $customerTransactionId
     *
     * @return self
     */
    public function setCustomerTransactionId(string $customerTransactionId) : self
    {
        $this->initialized['customerTransactionId'] = true;
        $this->customerTransactionId = $customerTransactionId;
        return $this;
    }
    /**
     * This is the response received when a shipment is requested.
     *
     * @return ShipV1ShipmentsPostResponse200Output
     */
    public function getOutput() : ShipV1ShipmentsPostResponse200Output
    {
        return $this->output;
    }
    /**
     * This is the response received when a shipment is requested.
     *
     * @param ShipV1ShipmentsPostResponse200Output $output
     *
     * @return self
     */
    public function setOutput(ShipV1ShipmentsPostResponse200Output $output) : self
    {
        $this->initialized['output'] = true;
        $this->output = $output;
        return $this;
    }
}
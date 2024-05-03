<?php

namespace AntibodiesOnline\FedEx\Model;

class ShipV1OpenshipmentsRetrievePostResponse200 extends \ArrayObject
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
     * Unique identifier used to match requests to their respective responses. <br>Example: XXX_ORDERXXXX789
     *
     * @var string
     */
    protected $transactionId;
    /**
     * This element allows you to assign a unique identifier to your transaction. This element is also returned in the reply and helps you match the request to the reply. <br> Example: AnyCo_order123456789
     *
     * @var string
     */
    protected $customerTransactionId;
    /**
     * 
     *
     * @var ShipV1OpenshipmentsRetrievePostResponse200Output
     */
    protected $output;
    /**
     * Unique identifier used to match requests to their respective responses. <br>Example: XXX_ORDERXXXX789
     *
     * @return string
     */
    public function getTransactionId() : string
    {
        return $this->transactionId;
    }
    /**
     * Unique identifier used to match requests to their respective responses. <br>Example: XXX_ORDERXXXX789
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
     * This element allows you to assign a unique identifier to your transaction. This element is also returned in the reply and helps you match the request to the reply. <br> Example: AnyCo_order123456789
     *
     * @return string
     */
    public function getCustomerTransactionId() : string
    {
        return $this->customerTransactionId;
    }
    /**
     * This element allows you to assign a unique identifier to your transaction. This element is also returned in the reply and helps you match the request to the reply. <br> Example: AnyCo_order123456789
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
     * 
     *
     * @return ShipV1OpenshipmentsRetrievePostResponse200Output
     */
    public function getOutput() : ShipV1OpenshipmentsRetrievePostResponse200Output
    {
        return $this->output;
    }
    /**
     * 
     *
     * @param ShipV1OpenshipmentsRetrievePostResponse200Output $output
     *
     * @return self
     */
    public function setOutput(ShipV1OpenshipmentsRetrievePostResponse200Output $output) : self
    {
        $this->initialized['output'] = true;
        $this->output = $output;
        return $this;
    }
}
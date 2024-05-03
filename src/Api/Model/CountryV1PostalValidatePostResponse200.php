<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class CountryV1PostalValidatePostResponse200 extends \ArrayObject
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
     * The transaction ID is special set of number that allows FedEx customer to assign a unique identifier to their each transaction. Helps in matching requests to reply.<br>Max 40 characters.<br>Example: 624deea6-b709-470c-8c39-4b5511281492
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
     * Indicates data returned in the postal validation reply.
     *
     * @var CountryV1PostalValidatePostResponse200Output
     */
    protected $output;
    /**
     * The transaction ID is special set of number that allows FedEx customer to assign a unique identifier to their each transaction. Helps in matching requests to reply.<br>Max 40 characters.<br>Example: 624deea6-b709-470c-8c39-4b5511281492
     *
     * @return string
     */
    public function getTransactionId() : string
    {
        return $this->transactionId;
    }
    /**
     * The transaction ID is special set of number that allows FedEx customer to assign a unique identifier to their each transaction. Helps in matching requests to reply.<br>Max 40 characters.<br>Example: 624deea6-b709-470c-8c39-4b5511281492
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
     * Indicates data returned in the postal validation reply.
     *
     * @return CountryV1PostalValidatePostResponse200Output
     */
    public function getOutput() : CountryV1PostalValidatePostResponse200Output
    {
        return $this->output;
    }
    /**
     * Indicates data returned in the postal validation reply.
     *
     * @param CountryV1PostalValidatePostResponse200Output $output
     *
     * @return self
     */
    public function setOutput(CountryV1PostalValidatePostResponse200Output $output) : self
    {
        $this->initialized['output'] = true;
        $this->output = $output;
        return $this;
    }
}
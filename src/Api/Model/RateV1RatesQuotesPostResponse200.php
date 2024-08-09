<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class RateV1RatesQuotesPostResponse200 extends \ArrayObject
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
     * This is the response object for a rate quote request.
     *
     * @var RateV1RatesQuotesPostResponse200Output
     */
    protected $output;
    /**
     * The transaction ID is a special set of numbers that defines each transaction.<br>Example: 624deea6-b709-470c-8c39-4b5511281492
     *
     * @return string
     */
    public function getTransactionId(): string
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
    public function setTransactionId(string $transactionId): self
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
    public function getCustomerTransactionId(): string
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
    public function setCustomerTransactionId(string $customerTransactionId): self
    {
        $this->initialized['customerTransactionId'] = true;
        $this->customerTransactionId = $customerTransactionId;
        return $this;
    }
    /**
     * This is the response object for a rate quote request.
     *
     * @return RateV1RatesQuotesPostResponse200Output
     */
    public function getOutput(): RateV1RatesQuotesPostResponse200Output
    {
        return $this->output;
    }
    /**
     * This is the response object for a rate quote request.
     *
     * @param RateV1RatesQuotesPostResponse200Output $output
     *
     * @return self
     */
    public function setOutput(RateV1RatesQuotesPostResponse200Output $output): self
    {
        $this->initialized['output'] = true;
        $this->output = $output;
        return $this;
    }
}
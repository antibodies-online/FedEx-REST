<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class AddressV1AddressesResolvePostResponse200 extends \ArrayObject
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
     * Unique identifier returned in the reply and helps you match the request to the reply.<br>Example: XXX_ORDERXXXX789
     *
     * @var string
     */
    protected $transactionId;
    /**
     * This element allows you to assign a unique identifier to your transaction. This element is also returned in the reply and helps you match the request to the reply. <br><br> Example: XXX_ORDERXXXX789
     *
     * @var string
     */
    protected $customerTransactionId;
    /**
     * Indicates the resolved address parameters.
     *
     * @var AddressV1AddressesResolvePostResponse200Output
     */
    protected $output;
    /**
     * Unique identifier returned in the reply and helps you match the request to the reply.<br>Example: XXX_ORDERXXXX789
     *
     * @return string
     */
    public function getTransactionId(): string
    {
        return $this->transactionId;
    }
    /**
     * Unique identifier returned in the reply and helps you match the request to the reply.<br>Example: XXX_ORDERXXXX789
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
     * This element allows you to assign a unique identifier to your transaction. This element is also returned in the reply and helps you match the request to the reply. <br><br> Example: XXX_ORDERXXXX789
     *
     * @return string
     */
    public function getCustomerTransactionId(): string
    {
        return $this->customerTransactionId;
    }
    /**
     * This element allows you to assign a unique identifier to your transaction. This element is also returned in the reply and helps you match the request to the reply. <br><br> Example: XXX_ORDERXXXX789
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
     * Indicates the resolved address parameters.
     *
     * @return AddressV1AddressesResolvePostResponse200Output
     */
    public function getOutput(): AddressV1AddressesResolvePostResponse200Output
    {
        return $this->output;
    }
    /**
     * Indicates the resolved address parameters.
     *
     * @param AddressV1AddressesResolvePostResponse200Output $output
     *
     * @return self
     */
    public function setOutput(AddressV1AddressesResolvePostResponse200Output $output): self
    {
        $this->initialized['output'] = true;
        $this->output = $output;
        return $this;
    }
}
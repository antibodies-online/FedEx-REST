<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class PickupV1FreightPickupsAvailabilitiesPostResponse200 extends \ArrayObject
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
     * 'This element allows you to assign a unique identifier to your transaction. This element is also returned in the reply and helps you match the request to the reply. <br> Example: AnyCo_order123456789'
     *
     * @var string
     */
    protected $customerTransactionId;
    /**
     * The response received for the freight pickup availability request.
     *
     * @var PickupV1FreightPickupsAvailabilitiesPostResponse200Output
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
     * 'This element allows you to assign a unique identifier to your transaction. This element is also returned in the reply and helps you match the request to the reply. <br> Example: AnyCo_order123456789'
     *
     * @return string
     */
    public function getCustomerTransactionId(): string
    {
        return $this->customerTransactionId;
    }
    /**
     * 'This element allows you to assign a unique identifier to your transaction. This element is also returned in the reply and helps you match the request to the reply. <br> Example: AnyCo_order123456789'
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
     * The response received for the freight pickup availability request.
     *
     * @return PickupV1FreightPickupsAvailabilitiesPostResponse200Output
     */
    public function getOutput(): PickupV1FreightPickupsAvailabilitiesPostResponse200Output
    {
        return $this->output;
    }
    /**
     * The response received for the freight pickup availability request.
     *
     * @param PickupV1FreightPickupsAvailabilitiesPostResponse200Output $output
     *
     * @return self
     */
    public function setOutput(PickupV1FreightPickupsAvailabilitiesPostResponse200Output $output): self
    {
        $this->initialized['output'] = true;
        $this->output = $output;
        return $this;
    }
}
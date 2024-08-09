<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class PickupV1PickupsCancelPutResponse400 extends \ArrayObject
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
     * The transaction ID is a special set of numbers that defines each transaction.<br>Example: 6f821609-aeb6-4ffe-b783-6e60b20f2801
     *
     * @var string
     */
    protected $transactionId;
    /**
     * "This element allows you to assign a unique identifier to your transaction.  This element is also returned in the reply and help you match the request to the reply <br> Example : AnyCo_order123456789"
     *
     * @var string
     */
    protected $customerTransactionId;
    /**
     * 
     *
     * @var list<PickupV1PickupsCancelPutResponse400ErrorsItem>
     */
    protected $errors;
    /**
     * The transaction ID is a special set of numbers that defines each transaction.<br>Example: 6f821609-aeb6-4ffe-b783-6e60b20f2801
     *
     * @return string
     */
    public function getTransactionId(): string
    {
        return $this->transactionId;
    }
    /**
     * The transaction ID is a special set of numbers that defines each transaction.<br>Example: 6f821609-aeb6-4ffe-b783-6e60b20f2801
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
     * "This element allows you to assign a unique identifier to your transaction.  This element is also returned in the reply and help you match the request to the reply <br> Example : AnyCo_order123456789"
     *
     * @return string
     */
    public function getCustomerTransactionId(): string
    {
        return $this->customerTransactionId;
    }
    /**
     * "This element allows you to assign a unique identifier to your transaction.  This element is also returned in the reply and help you match the request to the reply <br> Example : AnyCo_order123456789"
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
     * @return list<PickupV1PickupsCancelPutResponse400ErrorsItem>
     */
    public function getErrors(): array
    {
        return $this->errors;
    }
    /**
     * 
     *
     * @param list<PickupV1PickupsCancelPutResponse400ErrorsItem> $errors
     *
     * @return self
     */
    public function setErrors(array $errors): self
    {
        $this->initialized['errors'] = true;
        $this->errors = $errors;
        return $this;
    }
}
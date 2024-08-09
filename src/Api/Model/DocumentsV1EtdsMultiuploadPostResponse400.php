<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class DocumentsV1EtdsMultiuploadPostResponse400 extends \ArrayObject
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
     * This element allows you to assign a unique identifier to your transaction. This element is also returned in the reply and helps you match the request to the reply.
     *
     * @var string
     */
    protected $customerTransactionId;
    /**
     * The transaction ID is a special set of numbers that defines each transaction.
     *
     * @var string
     */
    protected $transactionId;
    /**
     * This is an error object detailing errors received in the reply.
     *
     * @var list<DocumentsV1EtdsMultiuploadPostResponse400ErrorsItem>
     */
    protected $errors;
    /**
     * This element allows you to assign a unique identifier to your transaction. This element is also returned in the reply and helps you match the request to the reply.
     *
     * @return string
     */
    public function getCustomerTransactionId(): string
    {
        return $this->customerTransactionId;
    }
    /**
     * This element allows you to assign a unique identifier to your transaction. This element is also returned in the reply and helps you match the request to the reply.
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
     * The transaction ID is a special set of numbers that defines each transaction.
     *
     * @return string
     */
    public function getTransactionId(): string
    {
        return $this->transactionId;
    }
    /**
     * The transaction ID is a special set of numbers that defines each transaction.
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
     * This is an error object detailing errors received in the reply.
     *
     * @return list<DocumentsV1EtdsMultiuploadPostResponse400ErrorsItem>
     */
    public function getErrors(): array
    {
        return $this->errors;
    }
    /**
     * This is an error object detailing errors received in the reply.
     *
     * @param list<DocumentsV1EtdsMultiuploadPostResponse400ErrorsItem> $errors
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
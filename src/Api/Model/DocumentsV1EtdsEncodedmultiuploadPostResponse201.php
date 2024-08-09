<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class DocumentsV1EtdsEncodedmultiuploadPostResponse201 extends \ArrayObject
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
     * 
     *
     * @var DocumentsV1EtdsEncodedmultiuploadPostResponse201Output
     */
    protected $output;
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
     * 
     *
     * @return DocumentsV1EtdsEncodedmultiuploadPostResponse201Output
     */
    public function getOutput(): DocumentsV1EtdsEncodedmultiuploadPostResponse201Output
    {
        return $this->output;
    }
    /**
     * 
     *
     * @param DocumentsV1EtdsEncodedmultiuploadPostResponse201Output $output
     *
     * @return self
     */
    public function setOutput(DocumentsV1EtdsEncodedmultiuploadPostResponse201Output $output): self
    {
        $this->initialized['output'] = true;
        $this->output = $output;
        return $this;
    }
}
<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class DocumentsV1EtdsMultiuploadPostResponse201 extends \ArrayObject
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
     * This element allows you to assign a unique identifier to your transaction. This element is also returned in the reply and helps you match the request to the reply Example:5678b975-ev0e-420b-8d7b-aa6ce65ec48n
     *
     * @var string
     */
    protected $customerTransactionId;
    /**
     * The transaction ID is a special set of numbers that defines each transaction.<br> Example:624deea6-b709-470c-8c39-4b5511281492
     *
     * @var string
     */
    protected $transactionId;
    /**
     * 
     *
     * @var DocumentsV1EtdsMultiuploadPostResponse201Output
     */
    protected $output;
    /**
     * This element allows you to assign a unique identifier to your transaction. This element is also returned in the reply and helps you match the request to the reply Example:5678b975-ev0e-420b-8d7b-aa6ce65ec48n
     *
     * @return string
     */
    public function getCustomerTransactionId(): string
    {
        return $this->customerTransactionId;
    }
    /**
     * This element allows you to assign a unique identifier to your transaction. This element is also returned in the reply and helps you match the request to the reply Example:5678b975-ev0e-420b-8d7b-aa6ce65ec48n
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
     * The transaction ID is a special set of numbers that defines each transaction.<br> Example:624deea6-b709-470c-8c39-4b5511281492
     *
     * @return string
     */
    public function getTransactionId(): string
    {
        return $this->transactionId;
    }
    /**
     * The transaction ID is a special set of numbers that defines each transaction.<br> Example:624deea6-b709-470c-8c39-4b5511281492
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
     * @return DocumentsV1EtdsMultiuploadPostResponse201Output
     */
    public function getOutput(): DocumentsV1EtdsMultiuploadPostResponse201Output
    {
        return $this->output;
    }
    /**
     * 
     *
     * @param DocumentsV1EtdsMultiuploadPostResponse201Output $output
     *
     * @return self
     */
    public function setOutput(DocumentsV1EtdsMultiuploadPostResponse201Output $output): self
    {
        $this->initialized['output'] = true;
        $this->output = $output;
        return $this;
    }
}
<?php

namespace AntibodiesOnline\FedEx\Model;

class DocumentsV1LhsimagesUploadPostResponse201 extends \ArrayObject
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
     * 
     *
     * @var DocumentsV1LhsimagesUploadPostResponse201Output
     */
    protected $output;
    /**
     * This element has a unique identifier added in your request, helps you match the request to the reply. <br> Example:XXXX_XXX123XXXXX
     *
     * @var string
     */
    protected $customerTransactionId;
    /**
     * 
     *
     * @return DocumentsV1LhsimagesUploadPostResponse201Output
     */
    public function getOutput() : DocumentsV1LhsimagesUploadPostResponse201Output
    {
        return $this->output;
    }
    /**
     * 
     *
     * @param DocumentsV1LhsimagesUploadPostResponse201Output $output
     *
     * @return self
     */
    public function setOutput(DocumentsV1LhsimagesUploadPostResponse201Output $output) : self
    {
        $this->initialized['output'] = true;
        $this->output = $output;
        return $this;
    }
    /**
     * This element has a unique identifier added in your request, helps you match the request to the reply. <br> Example:XXXX_XXX123XXXXX
     *
     * @return string
     */
    public function getCustomerTransactionId() : string
    {
        return $this->customerTransactionId;
    }
    /**
     * This element has a unique identifier added in your request, helps you match the request to the reply. <br> Example:XXXX_XXX123XXXXX
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
}
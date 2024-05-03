<?php

namespace AntibodiesOnline\FedEx\Model;

class DocumentsV1EtdsUploadPostResponse201 extends \ArrayObject
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
     * This is the output received for a document upload request.
     *
     * @var DocumentsV1EtdsUploadPostResponse201Output
     */
    protected $output;
    /**
     * This element has a unique identifier added in your request, helps you match the request to the reply. <br> Example:XXXX_XXX123XXXXX
     *
     * @var string
     */
    protected $customerTransactionId;
    /**
     * This is the output received for a document upload request.
     *
     * @return DocumentsV1EtdsUploadPostResponse201Output
     */
    public function getOutput() : DocumentsV1EtdsUploadPostResponse201Output
    {
        return $this->output;
    }
    /**
     * This is the output received for a document upload request.
     *
     * @param DocumentsV1EtdsUploadPostResponse201Output $output
     *
     * @return self
     */
    public function setOutput(DocumentsV1EtdsUploadPostResponse201Output $output) : self
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
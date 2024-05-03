<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class DocumentsV1LhsimagesUploadPostBody extends \ArrayObject
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
     * Input the actual image file to be uploaded.
     *
     * @var string
     */
    protected $attachment;
    /**
     * Indicate the image reference metadata details.
     *
     * @var DocumentsV1LhsimagesUploadPostBodyDocument
     */
    protected $document;
    /**
     * Input the actual image file to be uploaded.
     *
     * @return string
     */
    public function getAttachment() : string
    {
        return $this->attachment;
    }
    /**
     * Input the actual image file to be uploaded.
     *
     * @param string $attachment
     *
     * @return self
     */
    public function setAttachment(string $attachment) : self
    {
        $this->initialized['attachment'] = true;
        $this->attachment = $attachment;
        return $this;
    }
    /**
     * Indicate the image reference metadata details.
     *
     * @return DocumentsV1LhsimagesUploadPostBodyDocument
     */
    public function getDocument() : DocumentsV1LhsimagesUploadPostBodyDocument
    {
        return $this->document;
    }
    /**
     * Indicate the image reference metadata details.
     *
     * @param DocumentsV1LhsimagesUploadPostBodyDocument $document
     *
     * @return self
     */
    public function setDocument(DocumentsV1LhsimagesUploadPostBodyDocument $document) : self
    {
        $this->initialized['document'] = true;
        $this->document = $document;
        return $this;
    }
}
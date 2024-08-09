<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class DocumentsV1EtdsUploadPostBody extends \ArrayObject
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
     * Input the actual document/file to be uploaded.
     *
     * @var mixed
     */
    protected $attachment;
    /**
     * Provide all the document details and shipment meta data.
     *
     * @var DocumentsV1EtdsUploadPostBodyDocument
     */
    protected $document;
    /**
     * Input the actual document/file to be uploaded.
     *
     * @return mixed
     */
    public function getAttachment()
    {
        return $this->attachment;
    }
    /**
     * Input the actual document/file to be uploaded.
     *
     * @param mixed $attachment
     *
     * @return self
     */
    public function setAttachment($attachment): self
    {
        $this->initialized['attachment'] = true;
        $this->attachment = $attachment;
        return $this;
    }
    /**
     * Provide all the document details and shipment meta data.
     *
     * @return DocumentsV1EtdsUploadPostBodyDocument
     */
    public function getDocument(): DocumentsV1EtdsUploadPostBodyDocument
    {
        return $this->document;
    }
    /**
     * Provide all the document details and shipment meta data.
     *
     * @param DocumentsV1EtdsUploadPostBodyDocument $document
     *
     * @return self
     */
    public function setDocument(DocumentsV1EtdsUploadPostBodyDocument $document): self
    {
        $this->initialized['document'] = true;
        $this->document = $document;
        return $this;
    }
}
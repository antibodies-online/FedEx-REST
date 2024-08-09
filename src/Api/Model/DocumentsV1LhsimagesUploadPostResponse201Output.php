<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class DocumentsV1LhsimagesUploadPostResponse201Output extends \ArrayObject
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
     * This object specifies the meta data such as image type, path and index for the uploaded image file.
     *
     * @var DocumentsV1LhsimagesUploadPostResponse201OutputMeta
     */
    protected $meta;
    /**
     * Returns the high-level results for the document upload.<br>Valid values:<ul><li> SUCCESS</li><li>FAILURE</li><li>ERROR</li></ul>
     *
     * @var string
     */
    protected $status;
    /**
     * Returns the document reference ID associated with the request.
     *
     * @var string
     */
    protected $documentReferenceId;
    /**
     * This object specifies the meta data such as image type, path and index for the uploaded image file.
     *
     * @return DocumentsV1LhsimagesUploadPostResponse201OutputMeta
     */
    public function getMeta(): DocumentsV1LhsimagesUploadPostResponse201OutputMeta
    {
        return $this->meta;
    }
    /**
     * This object specifies the meta data such as image type, path and index for the uploaded image file.
     *
     * @param DocumentsV1LhsimagesUploadPostResponse201OutputMeta $meta
     *
     * @return self
     */
    public function setMeta(DocumentsV1LhsimagesUploadPostResponse201OutputMeta $meta): self
    {
        $this->initialized['meta'] = true;
        $this->meta = $meta;
        return $this;
    }
    /**
     * Returns the high-level results for the document upload.<br>Valid values:<ul><li> SUCCESS</li><li>FAILURE</li><li>ERROR</li></ul>
     *
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }
    /**
     * Returns the high-level results for the document upload.<br>Valid values:<ul><li> SUCCESS</li><li>FAILURE</li><li>ERROR</li></ul>
     *
     * @param string $status
     *
     * @return self
     */
    public function setStatus(string $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;
        return $this;
    }
    /**
     * Returns the document reference ID associated with the request.
     *
     * @return string
     */
    public function getDocumentReferenceId(): string
    {
        return $this->documentReferenceId;
    }
    /**
     * Returns the document reference ID associated with the request.
     *
     * @param string $documentReferenceId
     *
     * @return self
     */
    public function setDocumentReferenceId(string $documentReferenceId): self
    {
        $this->initialized['documentReferenceId'] = true;
        $this->documentReferenceId = $documentReferenceId;
        return $this;
    }
}
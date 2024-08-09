<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class DocumentsV1LhsimagesUploadPostBodyDocument extends \ArrayObject
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
     * Specify reference ID for the image to be uploaded.<br><br> Example: SIGNA202103
     *
     * @var string
     */
    protected $referenceId;
    /**
     * Specify file name to be uploaded.<br><br>Example: Signature.PNG
     *
     * @var string
     */
    protected $name;
    /**
     * Specify the file type or image type of the to be uploaded.<br><br>Valid Values are: <ul><li>image/png</li><li>image/gif</li></ul>
     *
     * @var string
     */
    protected $contentType;
    /**
     * Specify the rules.
     *
     * @var DocumentsV1LhsimagesUploadPostBodyDocumentRules
     */
    protected $rules;
    /**
     * Use this object to specify image meta data such as image type, path and index for the file to be uploaded.
     *
     * @var DocumentsV1LhsimagesUploadPostBodyDocumentMeta
     */
    protected $meta;
    /**
     * Specify reference ID for the image to be uploaded.<br><br> Example: SIGNA202103
     *
     * @return string
     */
    public function getReferenceId(): string
    {
        return $this->referenceId;
    }
    /**
     * Specify reference ID for the image to be uploaded.<br><br> Example: SIGNA202103
     *
     * @param string $referenceId
     *
     * @return self
     */
    public function setReferenceId(string $referenceId): self
    {
        $this->initialized['referenceId'] = true;
        $this->referenceId = $referenceId;
        return $this;
    }
    /**
     * Specify file name to be uploaded.<br><br>Example: Signature.PNG
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * Specify file name to be uploaded.<br><br>Example: Signature.PNG
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * Specify the file type or image type of the to be uploaded.<br><br>Valid Values are: <ul><li>image/png</li><li>image/gif</li></ul>
     *
     * @return string
     */
    public function getContentType(): string
    {
        return $this->contentType;
    }
    /**
     * Specify the file type or image type of the to be uploaded.<br><br>Valid Values are: <ul><li>image/png</li><li>image/gif</li></ul>
     *
     * @param string $contentType
     *
     * @return self
     */
    public function setContentType(string $contentType): self
    {
        $this->initialized['contentType'] = true;
        $this->contentType = $contentType;
        return $this;
    }
    /**
     * Specify the rules.
     *
     * @return DocumentsV1LhsimagesUploadPostBodyDocumentRules
     */
    public function getRules(): DocumentsV1LhsimagesUploadPostBodyDocumentRules
    {
        return $this->rules;
    }
    /**
     * Specify the rules.
     *
     * @param DocumentsV1LhsimagesUploadPostBodyDocumentRules $rules
     *
     * @return self
     */
    public function setRules(DocumentsV1LhsimagesUploadPostBodyDocumentRules $rules): self
    {
        $this->initialized['rules'] = true;
        $this->rules = $rules;
        return $this;
    }
    /**
     * Use this object to specify image meta data such as image type, path and index for the file to be uploaded.
     *
     * @return DocumentsV1LhsimagesUploadPostBodyDocumentMeta
     */
    public function getMeta(): DocumentsV1LhsimagesUploadPostBodyDocumentMeta
    {
        return $this->meta;
    }
    /**
     * Use this object to specify image meta data such as image type, path and index for the file to be uploaded.
     *
     * @param DocumentsV1LhsimagesUploadPostBodyDocumentMeta $meta
     *
     * @return self
     */
    public function setMeta(DocumentsV1LhsimagesUploadPostBodyDocumentMeta $meta): self
    {
        $this->initialized['meta'] = true;
        $this->meta = $meta;
        return $this;
    }
}
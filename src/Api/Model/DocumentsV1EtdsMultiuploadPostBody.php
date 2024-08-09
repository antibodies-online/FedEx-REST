<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class DocumentsV1EtdsMultiuploadPostBody extends \ArrayObject
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
     * Provide all the documents' details and shipment meta data
     *
     * @var DocumentsV1EtdsMultiuploadPostBodyDocumentInformation
     */
    protected $documentInformation;
    /**
     * Input the actual document/file to be uploaded.
     *
     * @var list<string>
     */
    protected $fileAttachments;
    /**
     * Provide all the documents' details and shipment meta data
     *
     * @return DocumentsV1EtdsMultiuploadPostBodyDocumentInformation
     */
    public function getDocumentInformation(): DocumentsV1EtdsMultiuploadPostBodyDocumentInformation
    {
        return $this->documentInformation;
    }
    /**
     * Provide all the documents' details and shipment meta data
     *
     * @param DocumentsV1EtdsMultiuploadPostBodyDocumentInformation $documentInformation
     *
     * @return self
     */
    public function setDocumentInformation(DocumentsV1EtdsMultiuploadPostBodyDocumentInformation $documentInformation): self
    {
        $this->initialized['documentInformation'] = true;
        $this->documentInformation = $documentInformation;
        return $this;
    }
    /**
     * Input the actual document/file to be uploaded.
     *
     * @return list<string>
     */
    public function getFileAttachments(): array
    {
        return $this->fileAttachments;
    }
    /**
     * Input the actual document/file to be uploaded.
     *
     * @param list<string> $fileAttachments
     *
     * @return self
     */
    public function setFileAttachments(array $fileAttachments): self
    {
        $this->initialized['fileAttachments'] = true;
        $this->fileAttachments = $fileAttachments;
        return $this;
    }
}
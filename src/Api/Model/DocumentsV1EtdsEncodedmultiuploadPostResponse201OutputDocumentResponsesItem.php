<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class DocumentsV1EtdsEncodedmultiuploadPostResponse201OutputDocumentResponsesItem extends \ArrayObject
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
     * Unique reference to the file
     *
     * @var string
     */
    protected $fileReferenceId;
    /**
     * Response to indicate status of upload completion. Data includes document related identifiers
     *
     * @var array<string, mixed>
     */
    protected $metaData;
    /**
     * Unique reference to the file
     *
     * @return string
     */
    public function getFileReferenceId(): string
    {
        return $this->fileReferenceId;
    }
    /**
     * Unique reference to the file
     *
     * @param string $fileReferenceId
     *
     * @return self
     */
    public function setFileReferenceId(string $fileReferenceId): self
    {
        $this->initialized['fileReferenceId'] = true;
        $this->fileReferenceId = $fileReferenceId;
        return $this;
    }
    /**
     * Response to indicate status of upload completion. Data includes document related identifiers
     *
     * @return array<string, mixed>
     */
    public function getMetaData(): iterable
    {
        return $this->metaData;
    }
    /**
     * Response to indicate status of upload completion. Data includes document related identifiers
     *
     * @param array<string, mixed> $metaData
     *
     * @return self
     */
    public function setMetaData(iterable $metaData): self
    {
        $this->initialized['metaData'] = true;
        $this->metaData = $metaData;
        return $this;
    }
}
<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class DocumentsV1EtdsMultiuploadPostResponse201Output extends \ArrayObject
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
     * 
     *
     * @var list<DocumentsV1EtdsMultiuploadPostResponse201OutputDocumentResponsesItem>
     */
    protected $documentResponses;
    /**
     * 
     *
     * @return list<DocumentsV1EtdsMultiuploadPostResponse201OutputDocumentResponsesItem>
     */
    public function getDocumentResponses(): array
    {
        return $this->documentResponses;
    }
    /**
     * 
     *
     * @param list<DocumentsV1EtdsMultiuploadPostResponse201OutputDocumentResponsesItem> $documentResponses
     *
     * @return self
     */
    public function setDocumentResponses(array $documentResponses): self
    {
        $this->initialized['documentResponses'] = true;
        $this->documentResponses = $documentResponses;
        return $this;
    }
}
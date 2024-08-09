<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class DocumentsV1EtdsEncodedmultiuploadPostResponse201Output extends \ArrayObject
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
     * @var list<DocumentsV1EtdsEncodedmultiuploadPostResponse201OutputDocumentResponsesItem>
     */
    protected $documentResponses;
    /**
     * 
     *
     * @return list<DocumentsV1EtdsEncodedmultiuploadPostResponse201OutputDocumentResponsesItem>
     */
    public function getDocumentResponses(): array
    {
        return $this->documentResponses;
    }
    /**
     * 
     *
     * @param list<DocumentsV1EtdsEncodedmultiuploadPostResponse201OutputDocumentResponsesItem> $documentResponses
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
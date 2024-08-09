<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class DocumentsV1LhsimagesUploadPostBodyDocumentRules extends \ArrayObject
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
     * Specify workflow name. To upload custom signature and letterhead images/company logo use value <i>LetterheadSignature</i>
     *
     * @var string
     */
    protected $workflowName;
    /**
     * Specify workflow name. To upload custom signature and letterhead images/company logo use value <i>LetterheadSignature</i>
     *
     * @return string
     */
    public function getWorkflowName(): string
    {
        return $this->workflowName;
    }
    /**
     * Specify workflow name. To upload custom signature and letterhead images/company logo use value <i>LetterheadSignature</i>
     *
     * @param string $workflowName
     *
     * @return self
     */
    public function setWorkflowName(string $workflowName): self
    {
        $this->initialized['workflowName'] = true;
        $this->workflowName = $workflowName;
        return $this;
    }
}
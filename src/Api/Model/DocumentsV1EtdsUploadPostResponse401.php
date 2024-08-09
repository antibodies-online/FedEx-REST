<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class DocumentsV1EtdsUploadPostResponse401 extends \ArrayObject
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
     * @var list<DocumentsV1EtdsUploadPostResponse401ErrorsItem>
     */
    protected $errors;
    /**
     * 
     *
     * @return list<DocumentsV1EtdsUploadPostResponse401ErrorsItem>
     */
    public function getErrors(): array
    {
        return $this->errors;
    }
    /**
     * 
     *
     * @param list<DocumentsV1EtdsUploadPostResponse401ErrorsItem> $errors
     *
     * @return self
     */
    public function setErrors(array $errors): self
    {
        $this->initialized['errors'] = true;
        $this->errors = $errors;
        return $this;
    }
}
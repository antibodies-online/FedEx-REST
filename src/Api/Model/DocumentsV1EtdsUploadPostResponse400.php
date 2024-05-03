<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class DocumentsV1EtdsUploadPostResponse400 extends \ArrayObject
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
     * This is an error object detailing errors received in the reply.
     *
     * @var list<DocumentsV1EtdsUploadPostResponse400ErrorsItem>
     */
    protected $errors;
    /**
     * This is an error object detailing errors received in the reply.
     *
     * @return list<DocumentsV1EtdsUploadPostResponse400ErrorsItem>
     */
    public function getErrors() : array
    {
        return $this->errors;
    }
    /**
     * This is an error object detailing errors received in the reply.
     *
     * @param list<DocumentsV1EtdsUploadPostResponse400ErrorsItem> $errors
     *
     * @return self
     */
    public function setErrors(array $errors) : self
    {
        $this->initialized['errors'] = true;
        $this->errors = $errors;
        return $this;
    }
}
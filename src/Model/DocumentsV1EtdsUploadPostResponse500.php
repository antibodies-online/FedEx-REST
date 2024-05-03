<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace AntibodiesOnline\FedEx\Model;

class DocumentsV1EtdsUploadPostResponse500 extends \ArrayObject
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
     * @var list<DocumentsV1EtdsUploadPostResponse500ErrorsItem>
     */
    protected $errors;

    /**
     * @return list<DocumentsV1EtdsUploadPostResponse500ErrorsItem>
     */
    public function getErrors(): array
    {
        return $this->errors;
    }

    /**
     * @param list<DocumentsV1EtdsUploadPostResponse500ErrorsItem> $errors
     */
    public function setErrors(array $errors): self
    {
        $this->initialized['errors'] = true;
        $this->errors = $errors;

        return $this;
    }
}

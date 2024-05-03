<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace AntibodiesOnline\FedEx\Model;

class DocumentsV1LhsimagesUploadPostResponse503ErrorsItem extends \ArrayObject
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
     * Indicates the error code.<br>Example: 1001.
     *
     * @var string
     */
    protected $code;
    /**
     * @var list<DocumentsV1LhsimagesUploadPostResponse503ErrorsItemParameterListItem>
     */
    protected $parameterList;
    /**
     * Indicates the description of API error alert message.<br>Example: Invalid request: no file information.
     *
     * @var string
     */
    protected $message;

    /**
     * Indicates the error code.<br>Example: 1001.
     */
    public function getCode(): string
    {
        return $this->code;
    }

    /**
     * Indicates the error code.<br>Example: 1001.
     */
    public function setCode(string $code): self
    {
        $this->initialized['code'] = true;
        $this->code = $code;

        return $this;
    }

    /**
     * @return list<DocumentsV1LhsimagesUploadPostResponse503ErrorsItemParameterListItem>
     */
    public function getParameterList(): array
    {
        return $this->parameterList;
    }

    /**
     * @param list<DocumentsV1LhsimagesUploadPostResponse503ErrorsItemParameterListItem> $parameterList
     */
    public function setParameterList(array $parameterList): self
    {
        $this->initialized['parameterList'] = true;
        $this->parameterList = $parameterList;

        return $this;
    }

    /**
     * Indicates the description of API error alert message.<br>Example: Invalid request: no file information.
     */
    public function getMessage(): string
    {
        return $this->message;
    }

    /**
     * Indicates the description of API error alert message.<br>Example: Invalid request: no file information.
     */
    public function setMessage(string $message): self
    {
        $this->initialized['message'] = true;
        $this->message = $message;

        return $this;
    }
}

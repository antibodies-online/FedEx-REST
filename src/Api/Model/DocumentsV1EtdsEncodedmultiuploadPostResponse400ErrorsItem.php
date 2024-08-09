<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class DocumentsV1EtdsEncodedmultiuploadPostResponse400ErrorsItem extends \ArrayObject
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
     * Indicates the error code.<br  >Example: 1001
     *
     * @var string
     */
    protected $code;
    /**
     * Indicates the description of API error alert message.<br>Example: Invalid request: invalid input : destinationCountryCode is Required
     *
     * @var string
     */
    protected $message;
    /**
     * These are parameter details such as paramter with a key.
     *
     * @var list<DocumentsV1EtdsEncodedmultiuploadPostResponse400ErrorsItemParameterListItem>
     */
    protected $parameterList;
    /**
     * Indicates the error code.<br  >Example: 1001
     *
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
    }
    /**
     * Indicates the error code.<br  >Example: 1001
     *
     * @param string $code
     *
     * @return self
     */
    public function setCode(string $code): self
    {
        $this->initialized['code'] = true;
        $this->code = $code;
        return $this;
    }
    /**
     * Indicates the description of API error alert message.<br>Example: Invalid request: invalid input : destinationCountryCode is Required
     *
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }
    /**
     * Indicates the description of API error alert message.<br>Example: Invalid request: invalid input : destinationCountryCode is Required
     *
     * @param string $message
     *
     * @return self
     */
    public function setMessage(string $message): self
    {
        $this->initialized['message'] = true;
        $this->message = $message;
        return $this;
    }
    /**
     * These are parameter details such as paramter with a key.
     *
     * @return list<DocumentsV1EtdsEncodedmultiuploadPostResponse400ErrorsItemParameterListItem>
     */
    public function getParameterList(): array
    {
        return $this->parameterList;
    }
    /**
     * These are parameter details such as paramter with a key.
     *
     * @param list<DocumentsV1EtdsEncodedmultiuploadPostResponse400ErrorsItemParameterListItem> $parameterList
     *
     * @return self
     */
    public function setParameterList(array $parameterList): self
    {
        $this->initialized['parameterList'] = true;
        $this->parameterList = $parameterList;
        return $this;
    }
}
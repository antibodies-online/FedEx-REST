<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class DocumentsV1EtdsUploadPostResponse401ErrorsItem extends \ArrayObject
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
     * Indicates the error code.<br>Example: AUTHENTICATION.TOKEN.INVALID
     *
     * @var string
     */
    protected $code;
    /**
     * Specifies the message parameter list.
     *
     * @var list<DocumentsV1EtdsUploadPostResponse401ErrorsItemParameterListItem>
     */
    protected $parameterList;
    /**
     * Indicates the description of API error alert message.<br>Example: Invalid token passed in the request
     *
     * @var mixed
     */
    protected $message;
    /**
     * Indicates the error code.<br>Example: AUTHENTICATION.TOKEN.INVALID
     *
     * @return string
     */
    public function getCode() : string
    {
        return $this->code;
    }
    /**
     * Indicates the error code.<br>Example: AUTHENTICATION.TOKEN.INVALID
     *
     * @param string $code
     *
     * @return self
     */
    public function setCode(string $code) : self
    {
        $this->initialized['code'] = true;
        $this->code = $code;
        return $this;
    }
    /**
     * Specifies the message parameter list.
     *
     * @return list<DocumentsV1EtdsUploadPostResponse401ErrorsItemParameterListItem>
     */
    public function getParameterList() : array
    {
        return $this->parameterList;
    }
    /**
     * Specifies the message parameter list.
     *
     * @param list<DocumentsV1EtdsUploadPostResponse401ErrorsItemParameterListItem> $parameterList
     *
     * @return self
     */
    public function setParameterList(array $parameterList) : self
    {
        $this->initialized['parameterList'] = true;
        $this->parameterList = $parameterList;
        return $this;
    }
    /**
     * Indicates the description of API error alert message.<br>Example: Invalid token passed in the request
     *
     * @return mixed
     */
    public function getMessage()
    {
        return $this->message;
    }
    /**
     * Indicates the description of API error alert message.<br>Example: Invalid token passed in the request
     *
     * @param mixed $message
     *
     * @return self
     */
    public function setMessage($message) : self
    {
        $this->initialized['message'] = true;
        $this->message = $message;
        return $this;
    }
}
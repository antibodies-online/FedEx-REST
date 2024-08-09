<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class OauthTokenPostResponse500ErrorsItem extends \ArrayObject
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
     * Indicates the error code.<br>Example: NOT.FOUND.ERROR
     *
     * @var string
     */
    protected $code;
    /**
     * List of parameters which indicates the properties of the alert message.
     *
     * @var list<OauthTokenPostResponse500ErrorsItemParameterListItem>
     */
    protected $parameterList;
    /**
     * Indicates the API error alert message.<br>Example: We are unable to process this request. Please try again later or contact FedEx Customer Service.
     *
     * @var string
     */
    protected $message;
    /**
     * Indicates the error code.<br>Example: NOT.FOUND.ERROR
     *
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
    }
    /**
     * Indicates the error code.<br>Example: NOT.FOUND.ERROR
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
     * List of parameters which indicates the properties of the alert message.
     *
     * @return list<OauthTokenPostResponse500ErrorsItemParameterListItem>
     */
    public function getParameterList(): array
    {
        return $this->parameterList;
    }
    /**
     * List of parameters which indicates the properties of the alert message.
     *
     * @param list<OauthTokenPostResponse500ErrorsItemParameterListItem> $parameterList
     *
     * @return self
     */
    public function setParameterList(array $parameterList): self
    {
        $this->initialized['parameterList'] = true;
        $this->parameterList = $parameterList;
        return $this;
    }
    /**
     * Indicates the API error alert message.<br>Example: We are unable to process this request. Please try again later or contact FedEx Customer Service.
     *
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }
    /**
     * Indicates the API error alert message.<br>Example: We are unable to process this request. Please try again later or contact FedEx Customer Service.
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
}
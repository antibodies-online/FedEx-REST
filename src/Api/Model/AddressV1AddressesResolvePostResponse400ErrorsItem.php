<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class AddressV1AddressesResolvePostResponse400ErrorsItem extends \ArrayObject
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
     * Indicates the error code.<br>Example: STANDARDIZED.ADDRESS.NOTFOUND
     *
     * @var string
     */
    protected $code;
    /**
     * 
     *
     * @var list<AddressV1AddressesResolvePostResponse400ErrorsItemParameterListItem>
     */
    protected $parameterList;
    /**
     * Indicates the description of API error alert message.<br>Example: Standardized address is not found.
     *
     * @var string
     */
    protected $message;
    /**
     * Indicates the error code.<br>Example: STANDARDIZED.ADDRESS.NOTFOUND
     *
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
    }
    /**
     * Indicates the error code.<br>Example: STANDARDIZED.ADDRESS.NOTFOUND
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
     * 
     *
     * @return list<AddressV1AddressesResolvePostResponse400ErrorsItemParameterListItem>
     */
    public function getParameterList(): array
    {
        return $this->parameterList;
    }
    /**
     * 
     *
     * @param list<AddressV1AddressesResolvePostResponse400ErrorsItemParameterListItem> $parameterList
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
     * Indicates the description of API error alert message.<br>Example: Standardized address is not found.
     *
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }
    /**
     * Indicates the description of API error alert message.<br>Example: Standardized address is not found.
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
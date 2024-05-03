<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class PickupV1PickupsCancelPutResponse401ErrorsItem extends \ArrayObject
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
     * Indicates the error code.<br>Example: NOT.AUTHORIZED.ERROR
     *
     * @var string
     */
    protected $code;
    /**
     * 
     *
     * @var list<PickupV1PickupsCancelPutResponse401ErrorsItemParameterListItem>
     */
    protected $parameterList;
    /**
     * Indicates the description of API error alert message.<br>Example: Access token expired. Please modify your request and try again.
     *
     * @var mixed
     */
    protected $message;
    /**
     * Indicates the error code.<br>Example: NOT.AUTHORIZED.ERROR
     *
     * @return string
     */
    public function getCode() : string
    {
        return $this->code;
    }
    /**
     * Indicates the error code.<br>Example: NOT.AUTHORIZED.ERROR
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
     * 
     *
     * @return list<PickupV1PickupsCancelPutResponse401ErrorsItemParameterListItem>
     */
    public function getParameterList() : array
    {
        return $this->parameterList;
    }
    /**
     * 
     *
     * @param list<PickupV1PickupsCancelPutResponse401ErrorsItemParameterListItem> $parameterList
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
     * Indicates the description of API error alert message.<br>Example: Access token expired. Please modify your request and try again.
     *
     * @return mixed
     */
    public function getMessage()
    {
        return $this->message;
    }
    /**
     * Indicates the description of API error alert message.<br>Example: Access token expired. Please modify your request and try again.
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
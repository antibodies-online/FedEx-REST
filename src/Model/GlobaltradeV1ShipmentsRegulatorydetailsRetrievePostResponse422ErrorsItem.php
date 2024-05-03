<?php

namespace AntibodiesOnline\FedEx\Model;

class GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse422ErrorsItem extends \ArrayObject
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
     * Indicates the error code.<br>Example: INVALID.INPUT.EXCEPTION
     *
     * @var string
     */
    protected $code;
    /**
     * 
     *
     * @var list<GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse422ErrorsItemParameterListItem>
     */
    protected $parameterList;
    /**
     * Validation failed for the object='shipmentRegulatoryDetailsInputVO'.Error count:1
     *
     * @var mixed
     */
    protected $message;
    /**
     * Indicates the error code.<br>Example: INVALID.INPUT.EXCEPTION
     *
     * @return string
     */
    public function getCode() : string
    {
        return $this->code;
    }
    /**
     * Indicates the error code.<br>Example: INVALID.INPUT.EXCEPTION
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
     * @return list<GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse422ErrorsItemParameterListItem>
     */
    public function getParameterList() : array
    {
        return $this->parameterList;
    }
    /**
     * 
     *
     * @param list<GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse422ErrorsItemParameterListItem> $parameterList
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
     * Validation failed for the object='shipmentRegulatoryDetailsInputVO'.Error count:1
     *
     * @return mixed
     */
    public function getMessage()
    {
        return $this->message;
    }
    /**
     * Validation failed for the object='shipmentRegulatoryDetailsInputVO'.Error count:1
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
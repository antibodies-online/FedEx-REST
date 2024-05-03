<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1ShipmentsPackagesValidatePostResponse403ErrorsItem extends \ArrayObject
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
     * Indicates the error code.<br>Example: SHIPMENT.USER.UNAUTHORIZED
     *
     * @var string
     */
    protected $code;
    /**
     * 
     *
     * @var list<ShipV1ShipmentsPackagesValidatePostResponse403ErrorsItemParameterListItem>
     */
    protected $parameterList;
    /**
     * Indicates the description of API error alert message.<br>Example: Requested user is not authorized to perform the operation.
     *
     * @var string
     */
    protected $message;
    /**
     * Indicates the error code.<br>Example: SHIPMENT.USER.UNAUTHORIZED
     *
     * @return string
     */
    public function getCode() : string
    {
        return $this->code;
    }
    /**
     * Indicates the error code.<br>Example: SHIPMENT.USER.UNAUTHORIZED
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
     * @return list<ShipV1ShipmentsPackagesValidatePostResponse403ErrorsItemParameterListItem>
     */
    public function getParameterList() : array
    {
        return $this->parameterList;
    }
    /**
     * 
     *
     * @param list<ShipV1ShipmentsPackagesValidatePostResponse403ErrorsItemParameterListItem> $parameterList
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
     * Indicates the description of API error alert message.<br>Example: Requested user is not authorized to perform the operation.
     *
     * @return string
     */
    public function getMessage() : string
    {
        return $this->message;
    }
    /**
     * Indicates the description of API error alert message.<br>Example: Requested user is not authorized to perform the operation.
     *
     * @param string $message
     *
     * @return self
     */
    public function setMessage(string $message) : self
    {
        $this->initialized['message'] = true;
        $this->message = $message;
        return $this;
    }
}
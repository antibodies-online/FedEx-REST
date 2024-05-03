<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse200OutputCxsalertsItem extends \ArrayObject
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
     * Specifies the API alert code.
     *
     * @var string
     */
    protected $code;
    /**
     * Specifies the API alert type.
     *
     * @var string
     */
    protected $alertType;
    /**
     * 
     *
     * @var list<GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse200OutputCxsalertsItemParameterListItem>
     */
    protected $parameterList;
    /**
     * Specifies the API alert message.
     *
     * @var string
     */
    protected $message;
    /**
     * Specifies the API alert code.
     *
     * @return string
     */
    public function getCode() : string
    {
        return $this->code;
    }
    /**
     * Specifies the API alert code.
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
     * Specifies the API alert type.
     *
     * @return string
     */
    public function getAlertType() : string
    {
        return $this->alertType;
    }
    /**
     * Specifies the API alert type.
     *
     * @param string $alertType
     *
     * @return self
     */
    public function setAlertType(string $alertType) : self
    {
        $this->initialized['alertType'] = true;
        $this->alertType = $alertType;
        return $this;
    }
    /**
     * 
     *
     * @return list<GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse200OutputCxsalertsItemParameterListItem>
     */
    public function getParameterList() : array
    {
        return $this->parameterList;
    }
    /**
     * 
     *
     * @param list<GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse200OutputCxsalertsItemParameterListItem> $parameterList
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
     * Specifies the API alert message.
     *
     * @return string
     */
    public function getMessage() : string
    {
        return $this->message;
    }
    /**
     * Specifies the API alert message.
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
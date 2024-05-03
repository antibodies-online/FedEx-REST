<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class AddressV1AddressesResolvePostResponse200OutputAlertsItem extends \ArrayObject
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
     * Indicates the API alert code.
     *
     * @var string
     */
    protected $code;
    /**
     * Indicates the API alert message.
     *
     * @var string
     */
    protected $message;
    /**
     * Indicates the API alert type.
     *
     * @var string
     */
    protected $alertType;
    /**
     * Indicates the API alert code.
     *
     * @return string
     */
    public function getCode() : string
    {
        return $this->code;
    }
    /**
     * Indicates the API alert code.
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
     * Indicates the API alert message.
     *
     * @return string
     */
    public function getMessage() : string
    {
        return $this->message;
    }
    /**
     * Indicates the API alert message.
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
    /**
     * Indicates the API alert type.
     *
     * @return string
     */
    public function getAlertType() : string
    {
        return $this->alertType;
    }
    /**
     * Indicates the API alert type.
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
}
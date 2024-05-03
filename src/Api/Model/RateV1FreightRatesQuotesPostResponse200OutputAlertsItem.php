<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class RateV1FreightRatesQuotesPostResponse200OutputAlertsItem extends \ArrayObject
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
     * Specifies the alert code.
     *
     * @var string
     */
    protected $code;
    /**
     * Specifies the alert type.
     *
     * @var string
     */
    protected $alertType;
    /**
     * Specifies the alert message.
     *
     * @var string
     */
    protected $message;
    /**
     * Specifies the alert code.
     *
     * @return string
     */
    public function getCode() : string
    {
        return $this->code;
    }
    /**
     * Specifies the alert code.
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
     * Specifies the alert type.
     *
     * @return string
     */
    public function getAlertType() : string
    {
        return $this->alertType;
    }
    /**
     * Specifies the alert type.
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
     * Specifies the alert message.
     *
     * @return string
     */
    public function getMessage() : string
    {
        return $this->message;
    }
    /**
     * Specifies the alert message.
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
<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class TrackV1TcnPostResponse200OutputAlertsItem extends \ArrayObject
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
     * Specifies the api alert code.
     *
     * @var string
     */
    protected $code;
    /**
     * Specifies the api alert type.
     *
     * @var string
     */
    protected $alertType;
    /**
     * Specifies the api alert message.
     *
     * @var string
     */
    protected $message;
    /**
     * Specifies the api alert code.
     *
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
    }
    /**
     * Specifies the api alert code.
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
     * Specifies the api alert type.
     *
     * @return string
     */
    public function getAlertType(): string
    {
        return $this->alertType;
    }
    /**
     * Specifies the api alert type.
     *
     * @param string $alertType
     *
     * @return self
     */
    public function setAlertType(string $alertType): self
    {
        $this->initialized['alertType'] = true;
        $this->alertType = $alertType;
        return $this;
    }
    /**
     * Specifies the api alert message.
     *
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }
    /**
     * Specifies the api alert message.
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
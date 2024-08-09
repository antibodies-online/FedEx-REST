<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1EndofdayPutResponse400ErrorsItem extends \ArrayObject
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
     * Indicates the error code.<br>Example: AVAILABILITY.SHIP.DATE.INVALID,LOGIN.REAUTHENTICATE.ERROR,UNAUTHORIZED.USAGE,NOT.FOUND.ERROR,INTERNAL.SERVER.ERROR
     *
     * @var string
     */
    protected $code;
    /**
     * 
     *
     * @var list<ShipV1EndofdayPutResponse400ErrorsItemParameterListItem>
     */
    protected $parameterList;
    /**
     * Indicates the description of API error alert message.<br>Example: We are unable to process this request. Please try again later or contact FedEx Customer Service.
     *
     * @var string
     */
    protected $message;
    /**
     * Indicates the error code.<br>Example: AVAILABILITY.SHIP.DATE.INVALID,LOGIN.REAUTHENTICATE.ERROR,UNAUTHORIZED.USAGE,NOT.FOUND.ERROR,INTERNAL.SERVER.ERROR
     *
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
    }
    /**
     * Indicates the error code.<br>Example: AVAILABILITY.SHIP.DATE.INVALID,LOGIN.REAUTHENTICATE.ERROR,UNAUTHORIZED.USAGE,NOT.FOUND.ERROR,INTERNAL.SERVER.ERROR
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
     * @return list<ShipV1EndofdayPutResponse400ErrorsItemParameterListItem>
     */
    public function getParameterList(): array
    {
        return $this->parameterList;
    }
    /**
     * 
     *
     * @param list<ShipV1EndofdayPutResponse400ErrorsItemParameterListItem> $parameterList
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
     * Indicates the description of API error alert message.<br>Example: We are unable to process this request. Please try again later or contact FedEx Customer Service.
     *
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }
    /**
     * Indicates the description of API error alert message.<br>Example: We are unable to process this request. Please try again later or contact FedEx Customer Service.
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
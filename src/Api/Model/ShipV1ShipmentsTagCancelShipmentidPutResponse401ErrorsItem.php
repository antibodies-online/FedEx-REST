<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1ShipmentsTagCancelShipmentidPutResponse401ErrorsItem extends \ArrayObject
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
     * Indicates the error code.<br>Example: NOT.AUTHORIZED.ERROR
     *
     * @var string
     */
    protected $code;
    /**
     * Specifies list of parameters.
     *
     * @var list<ShipV1ShipmentsTagCancelShipmentidPutResponse401ErrorsItemParameterListItem>
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
    public function getCode(): string
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
    public function setCode(string $code): self
    {
        $this->initialized['code'] = true;
        $this->code = $code;
        return $this;
    }
    /**
     * Specifies list of parameters.
     *
     * @return list<ShipV1ShipmentsTagCancelShipmentidPutResponse401ErrorsItemParameterListItem>
     */
    public function getParameterList(): array
    {
        return $this->parameterList;
    }
    /**
     * Specifies list of parameters.
     *
     * @param list<ShipV1ShipmentsTagCancelShipmentidPutResponse401ErrorsItemParameterListItem> $parameterList
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
    public function setMessage($message): self
    {
        $this->initialized['message'] = true;
        $this->message = $message;
        return $this;
    }
}
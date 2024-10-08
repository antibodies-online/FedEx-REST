<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse400ErrorsItem extends \ArrayObject
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
     * Indicates the error code.<br>Example: ACCOUNT.NUMBER.INVALID,LOGIN.REAUTHENTICATE.ERROR,SHIPMENT.USER.UNAUTHORIZED,NOT.FOUND.ERROR,INTERNAL.SERVER.ERROR
     *
     * @var mixed
     */
    protected $code;
    /**
     * 
     *
     * @var list<GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse400ErrorsItemParameterListItem>
     */
    protected $parameterList;
    /**
     * Indicates the description of API error alert message.<br>Example: We are unable to process this request. Please try again later or contact FedEx Customer Service.
     *
     * @var string
     */
    protected $message;
    /**
     * Indicates the error code.<br>Example: ACCOUNT.NUMBER.INVALID,LOGIN.REAUTHENTICATE.ERROR,SHIPMENT.USER.UNAUTHORIZED,NOT.FOUND.ERROR,INTERNAL.SERVER.ERROR
     *
     * @return mixed
     */
    public function getCode()
    {
        return $this->code;
    }
    /**
     * Indicates the error code.<br>Example: ACCOUNT.NUMBER.INVALID,LOGIN.REAUTHENTICATE.ERROR,SHIPMENT.USER.UNAUTHORIZED,NOT.FOUND.ERROR,INTERNAL.SERVER.ERROR
     *
     * @param mixed $code
     *
     * @return self
     */
    public function setCode($code): self
    {
        $this->initialized['code'] = true;
        $this->code = $code;
        return $this;
    }
    /**
     * 
     *
     * @return list<GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse400ErrorsItemParameterListItem>
     */
    public function getParameterList(): array
    {
        return $this->parameterList;
    }
    /**
     * 
     *
     * @param list<GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse400ErrorsItemParameterListItem> $parameterList
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
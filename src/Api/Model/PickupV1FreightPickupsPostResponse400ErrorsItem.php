<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class PickupV1FreightPickupsPostResponse400ErrorsItem extends \ArrayObject
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
     * Indicates the error code.<br>Example: ACCOUNTNUMBER.REGISTRATION.REQUIRED, LOGIN.REAUTHENTICATE.ERROR, UNAUTHORIZED.USAGE, NOT.FOUND.ERROR, INTERNAL.SERVER.ERROR, SERVICE.UNAVAILABLE.ERROR
     *
     * @var string
     */
    protected $code;
    /**
     * 
     *
     * @var list<PickupV1FreightPickupsPostResponse400ErrorsItemParameterListItem>
     */
    protected $parameterList;
    /**
     * Indicates the description of API error alert message.<br>Example: Please enter a valid 9-digit FedEx account number or register for a new FedEx account number.
     *
     * @var string
     */
    protected $message;
    /**
     * Indicates the error code.<br>Example: ACCOUNTNUMBER.REGISTRATION.REQUIRED, LOGIN.REAUTHENTICATE.ERROR, UNAUTHORIZED.USAGE, NOT.FOUND.ERROR, INTERNAL.SERVER.ERROR, SERVICE.UNAVAILABLE.ERROR
     *
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
    }
    /**
     * Indicates the error code.<br>Example: ACCOUNTNUMBER.REGISTRATION.REQUIRED, LOGIN.REAUTHENTICATE.ERROR, UNAUTHORIZED.USAGE, NOT.FOUND.ERROR, INTERNAL.SERVER.ERROR, SERVICE.UNAVAILABLE.ERROR
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
     * @return list<PickupV1FreightPickupsPostResponse400ErrorsItemParameterListItem>
     */
    public function getParameterList(): array
    {
        return $this->parameterList;
    }
    /**
     * 
     *
     * @param list<PickupV1FreightPickupsPostResponse400ErrorsItemParameterListItem> $parameterList
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
     * Indicates the description of API error alert message.<br>Example: Please enter a valid 9-digit FedEx account number or register for a new FedEx account number.
     *
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }
    /**
     * Indicates the description of API error alert message.<br>Example: Please enter a valid 9-digit FedEx account number or register for a new FedEx account number.
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